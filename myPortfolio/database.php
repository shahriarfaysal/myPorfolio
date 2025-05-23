<?php
    function databaseConn()
    {
        // Database connection variables
        $host = 'localhost'; // Hostname or IP
        $dbname = 'myProtfolio'; // Database name
        $username = 'root'; // Username
        $password = ''; // Password

        // Create a new mysqli instance
        $conn = new mysqli($host, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        $conn = databaseConn ();
        if ($conn) {
            $name = $conn->real_escape_string ($_POST['name']);
            $email = $conn->real_escape_string ($_POST['email']);
            $subject = $conn->real_escape_string ($_POST['subject']);
            $message = $conn->real_escape_string ($_POST['message']);

            $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
            if ($conn->query ($sql) === TRUE) {
                $msg = "Message sent successfully!";
            } else {
                $msg = "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close ();
            echo "<script>window.location.href = 'index.php?msg=" . urlencode ($msg) . "';</script>";
            exit();
        } else {
            $msg = "Failed to send message!";
            echo "<script>window.location.href = 'index.php?msg=" . urlencode ($msg) . "';</script>";
            exit();
        }
    }
?>


