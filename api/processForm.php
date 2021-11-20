<?php
$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$phone = $data['phone'];
$email = $data['email'];
$feedback = $data['feedback'];
$status = 1;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam-dw";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO feedback (name,phone,email,feedback,status) VALUES ('$name','$phone','$email', '$feedback','$status')";


// config response data kiểu json
header('Content-Type: application/json; charset=utf-8');
$obj = new stdClass();
if ($conn->query($sql) === TRUE) {
    $obj->message = 'Action success';
    $obj->status = 201;
    http_response_code(201);

} else {
    $obj->message = 'Action fails';
    $obj->status = 500;
    http_response_code(500);
}
echo json_encode($obj);

$conn->close();