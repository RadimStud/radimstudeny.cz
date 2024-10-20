<?php
header('Content-Type: application/json');

    // Database connection details
    $servername = "db.dw207.webglobe.com";
    $username = "radimstudeny_cz5";
    $password = "nnilCQlISOS2";
    $dbname = "radimstudeny_cz5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Database connection failed: ' . $conn->connect_error]));
}

$sql = "SELECT * FROM TestUsers";
$result = $conn->query($sql);

$users = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} else {
    $users = ['message' => 'No users found'];
}

echo json_encode($users);

$conn->close();
?>
