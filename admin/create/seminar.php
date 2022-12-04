<?php 

require("../layout/db.php");

$name = $_POST['name'];
$guest = $_POST['guest'];
$org = $_POST['org'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$sql = "INSERT INTO sem (name ,guest, org , start_date , end_date , dept)
VALUES ('$name','$guest','$org','$start_date','$end_date', 'CSE')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/seminar.php?page=1&msg=Achievement added Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>