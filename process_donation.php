<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $contactNo = $_POST["contactNo"];
    $payment_id = $_POST["payment_id"];

    // Store donation details in MySQL database (Assuming you have a 'donated' table)
    $servername = "localhost:4307";
    $username = "root";
    $password = "";
    $dbname = "razorpaynew";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $timestamp = date("Y-m-d H:i:s"); // Current timestamp

    $sql = "INSERT INTO donated (name, email, amount, contactNo, payment_id, timestamp) VALUES ('$name', '$email', '$amount', '$contactNo', '$payment_id', '$timestamp')";

    if ($conn->query($sql) === TRUE) {
        // Store payment_id in session
        session_start();
        $_SESSION['payment_id'] = $payment_id;
        $_SESSION['name'] = $name;
        $_SESSION['amount'] = $amount;
        echo "done";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>










