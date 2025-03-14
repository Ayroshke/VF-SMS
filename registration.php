<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $emailid = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['mobilenumber'];

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, mobile_number) VALUES (?, ?, ?, ?)");

    if ($stmt === false) {
        die("Error in SQL statement: " . $conn->error);
    }

    $stmt->bind_param("ssss", $username, $emailid, $password, $number);

    if ($stmt->execute()) {
        echo "Registration Successful! Please <a href='user_login.php'>Log In</a> to Continue.";
    } else {
        echo "An error occurred, data could not be saved:" . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
