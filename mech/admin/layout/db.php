<?php
session_start();
if($_SESSION["lock"]!="xiny9387tdpq##*&B98oyo8B@*O&^PB^B$"){
  header("Location: /admin");
  die();
}
$servername = "localhost:3306";
$username = "sjcet";
$password = "%9S86d5bl";
$db_name = "sjcettnj_sjcet";
$department = 'MECH';
$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>