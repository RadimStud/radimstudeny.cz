<?php
    // Database connection details
    $servername = "db.dw207.webglobe.com";
    $username = "radimstudeny_cz5";
    $password = "nnilCQlISOS2";
    $dbname = "radimstudeny_cz5";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch users
    $sql = "SELECT username FROM TestUsers";
    $result = $conn->query($sql);

    // Check if results exist and output each user
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["username"] . "\n";
        }
    } else {
        echo "No users found.";
    }

    // Close connection
    $conn->close();
?>
