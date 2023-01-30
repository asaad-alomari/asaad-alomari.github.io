<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullName = $_POST['fullName'];
        $phoneNumber = $_POST['phoneNumber'];
        $eMail = $_POST['eMail'];
        $messageGo = $_POST['messageGo'];
    
        // Connect to database
        $conn = mysqli_connect('localhost', 'root', '', 'pharmacydatabase');

        if ($conn->connect_error) {
            die('Connection Failed : ' . $conn->connect_error);
        } else {
            // insert the data into the database
            $fullName = mysqli_real_escape_string($conn, $fullName);
            $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
            $eMail = mysqli_real_escape_string($conn, $eMail);
            $messageGo = mysqli_real_escape_string($conn, $messageGo);

            $sql = "INSERT INTO messagess (fullName, phoneNumber, eMail, Message) 
                    VALUES ('$fullName', '$phoneNumber', '$eMail', '$messageGo')";
            if (mysqli_query($conn, $sql)) {
                // the data was inserted successfully
                $_SESSION['message'] = "Your message has been sent.";
            } else {
                // there was an error inserting the data
                $_SESSION['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
        }
    }
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

?>