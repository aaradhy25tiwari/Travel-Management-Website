<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $source = htmlspecialchars($_POST['source']);
    $destination = htmlspecialchars($_POST['destination']);
    $date = htmlspecialchars($_POST['date']);
    $mode = htmlspecialchars($_POST['mode']);

    // Replace this with your actual Aviationstack API key
    $apiKey = 'b6dd81904ce8af4d2065dc8cd58f1f7f';

    // Only perform search if the mode is flight (for this example)
    if ($mode === 'flight') {
        $endpoint = 'http://api.aviationstack.com/v1/flights';
        $params = http_build_query([
            'access_key' => $apiKey,
            'dep_iata' => $source,
            'arr_iata' => $destination,
            'flight_date' => $date
        ]);

        $ch = curl_init("$endpoint?$params");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $flights = json_decode($response, true);

        if (isset($flights['data'])) {
            echo "<div class='results'>";
            foreach ($flights['data'] as $flight) {
                echo "<div class='result-item'>";
                echo "<p><strong>Flight Number:</strong> " . $flight['flight']['number'] . "</p>";
                echo "<p><strong>Airline:</strong> " . $flight['airline']['name'] . "</p>";
                echo "<p><strong>Departure:</strong> " . $flight['departure']['airport'] . " (" . $flight['departure']['iata'] . ")</p>";
                echo "<p><strong>Arrival:</strong> " . $flight['arrival']['airport'] . " (" . $flight['arrival']['iata'] . ")</p>";
                echo "<p><strong>Status:</strong> " . $flight['flight_status'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>No flights found for the selected date and route.</p>";
        }
    } else {
        echo "<p>Currently, we only support flight searches. Please select flight as the mode of transport.</p>";
    }
}
?>
