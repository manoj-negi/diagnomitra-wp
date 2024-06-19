<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish connection to your database (adjust with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "Qwerty@12";
    $dbname = "diagnomitra";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Decode JSON data from _form_ field
    $form_data = json_decode($_POST['_form_'], true);

    // Prepare data from form inputs (sanitize and prevent SQL injection)
    $full_name = mysqli_real_escape_string($conn, $form_data[0]['full_name']);
    $email = mysqli_real_escape_string($conn, $form_data[0]['email']);
    $mobileNumber = mysqli_real_escape_string($conn, $form_data[0]['mobileNumber']);
    $location = mysqli_real_escape_string($conn, $form_data[0]['location']);
    
    // Handle file upload
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["UploadPrescription_683"]["name"]);
    if (move_uploaded_file($_FILES["UploadPrescription_683"]["tmp_name"], $targetFile)) {
        // Insert data into database
        $sql = "INSERT INTO form_data (full_name, email, mobile_number, location, prescription_file)
                VALUES ('$full_name', '$email', '$mobileNumber', '$location', '$targetFile')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
