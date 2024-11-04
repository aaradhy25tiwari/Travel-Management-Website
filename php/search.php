<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sourceCity = $_POST['sourceCity'];
    $destinationCity = $_POST['destinationCity'];
    $travelDate = $_POST['travelDate'];
    $modeOfTransport = $_POST['modeOfTransport'];

    // Sanitize input
    $sourceCity = htmlspecialchars($sourceCity);
    $destinationCity = htmlspecialchars($destinationCity);
    $travelDate = htmlspecialchars($travelDate);
    $modeOfTransport = htmlspecialchars($modeOfTransport);

    // Base URL for the booking button (for demo purposes)
    $bookingUrlBase = "https://booking.example.com?source=$sourceCity&destination=$destinationCity&date=$travelDate";

    // Call relevant API based on mode of transport
    switch($modeOfTransport) {
        case 'train':
            // Call Indian Rail API for trains
            $apiKey = 'YOUR_INDIAN_RAIL_API_KEY';  // Replace with your actual Indian Rail API key
            $url = "https://indianrailapi.com/api/v2/TrainBetweenStations/apikey/$apiKey/From/$sourceCity/To/$destinationCity/Date/$travelDate";
            
            // Fetch data from the Indian Rail API
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);
            
            $trainData = json_decode($response, true);
            if (!empty($trainData['Trains'])) {
                echo "<h2>Available Trains from $sourceCity to $destinationCity on $travelDate:</h2>";
                echo "<table border='1'>
                        <tr>
                            <th>Train Number</th>
                            <th>Train Name</th>
                            <th>Time</th>
                            <th>Duration</th>
                            <th>Price</th>
                            <th>Booking</th>
                        </tr>";

                foreach ($trainData['Trains'] as $train) {
                    // Display Train Information
                    echo "<tr>
                            <td>{$train['TrainNumber']}</td>
                            <td>{$train['TrainName']}</td>
                            <td>{$train['DepartureTime']}</td>
                            <td>{$train['Duration']}</td>
                            <td>{$train['Fare']}</td>
                            <td><a href='$bookingUrlBase' class='btn'>Book Now</a></td>
                          </tr>";
                }

                echo "</table>";
            } else {
                echo "<p>No trains available for the selected date.</p>";
            }
            break;

        case 'flight':
            // Use SerpAPI for flight search
            $apiKey = 'be9aafba402335e5ae419ee67f6d465f61e3176a6d05780b3dfd8c2319bf3ec4'; // Replace with your actual SerpAPI key
            $url = "https://serpapi.com/search.json?engine=google_flights&q=$sourceCity+to+$destinationCity+on+$travelDate&api_key=$apiKey";
            
            // Fetch data from SerpAPI
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);

            $flightData = json_decode($response, true);
            if (!empty($flightData['flights_results'])) {
                echo "<h2>Available Flights from $sourceCity to $destinationCity on $travelDate:</h2>";
                echo "<table border='1'>
                        <tr>
                            <th>Airline</th>
                            <th>Flight Code</th>
                            <th>Time</th>
                            <th>Duration</th>
                            <th>Price</th>
                            <th>Booking</th>
                        </tr>";

                foreach ($flightData['flights_results'] as $flight) {
                    // Extracting flight information
                    $airline = $flight['airline'];
                    $flightCode = $flight['flight_number'];
                    $time = $flight['departure_time'];
                    $duration = $flight['duration'];
                    $price = $flight['price'];
                    $bookingLink = $flight['booking_link'];

                    echo "<tr>
                            <td>$airline</td>
                            <td>$flightCode</td>
                            <td>$time</td>
                            <td>$duration</td>
                            <td>$price</td>
                            <td><a href='$bookingLink' target='_blank' class='btn'>Book Now</a></td>
                          </tr>";
                }

                echo "</table>";
            } else {
                echo "<p>No flights available for the selected date.</p>";
            }
            break;

        case 'bus':
            // Call a bus API (assuming you have one, or you can replace this with another service)
            $url = "https://api.example.com/buses?source=$sourceCity&destination=$destinationCity&date=$travelDate";
            
            // Fetch data from Bus API (example placeholder)
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);

            // Handle Bus API response here (similar to train and flight handling)
            echo "<p>Bus information will be displayed here.</p>";
            break;

        default:
            echo "<p>Invalid mode of transport selected.</p>";
            exit;
    }
}
?>
