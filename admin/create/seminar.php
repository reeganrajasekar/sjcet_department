<?php 

require("../layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
$name = test_input($_POST['name']);
$guest = test_input($_POST['guest']);
$org = test_input($_POST['org']);
$start_date = test_input($_POST['start_date']);
$end_date = test_input($_POST['end_date']);
$sql = "INSERT INTO sem (name ,guest, org , start_date , end_date , dept)
VALUES ('$name','$guest','$org','$start_date','$end_date', '$department')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/seminar.php?page=1&msg=Achievement added Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>