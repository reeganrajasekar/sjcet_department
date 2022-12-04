<?php
$servername = "localhost";
$username = "root";
$password = "trysomething";
$db_name = "sjcet";

$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$myArray = array();
$sql = $_GET['sql'];
$result = $conn->query("$sql");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
} else {
    echo 0;
}
$conn->close();
?>