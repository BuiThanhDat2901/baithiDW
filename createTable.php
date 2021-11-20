<?php
$data = json_decode(file_get_contents("php://input"), true);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam-dw";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlDropTables = "DROP TABLE IF EXISTS feedback";
$conn->query($sqlDropTables);


$sql = "CREATE TABLE feedback (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(100) NOT NULL,
phone VARCHAR(50) NOT NULL,
feedback TEXT NOT NULL,
status INT(4) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();