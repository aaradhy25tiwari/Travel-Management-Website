<?php 

include './db.php';

// Check if form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if user already exists (optional)
    $check_email = "";
    $sql_check = "";

    if (isset($_POST["email"])) {
        $check_email = $_POST["email"];
        $sql_check = "SELECT * FROM signup WHERE email = '$check_email'";
        $result = mysqli_query($conn, $sql_check);

        if (mysqli_num_rows($result) > 0) {
            echo "Error: Email already exists! Please Login";
            mysqli_close($conn);
            header("Location: ../login.html");
            exit();
        }
    }

    // Get form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"]; // Not recommended to store plain text email for security reasons
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT); // Hash password for security
    $cpassword = password_hash($_POST["cpass"], PASSWORD_DEFAULT); // Hash confirm password
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $pincode = $_POST['pincode'];
    $city = $_POST['district'];
    $state = $_POST['state'];
    
  
    /*// Check if password and confirm password match
    if ($password != $cpassword) {
      echo "Passwords do not match!";
      exit();
    }*/
  
    // Prepare SQL statement with parameterized query for security
    $sql = "INSERT INTO signup (name, phone, email, password, dob, gender, country, city, state, pincode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $phone, $email, $password, $dob, $gender, $country);
  
    // Execute the query
    if ($stmt->execute()) {
      echo "New user created successfully!";
      header("Location: ../login.html");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $stmt->close();
  }
  
  $conn->close();
?>