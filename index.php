<?php

    $servername = "192.168.50.100";
    $database = "BD_AGAPES_TDSI";
    $username = "Mcastro";
    $password = "XmK(qg0T";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);

?>
