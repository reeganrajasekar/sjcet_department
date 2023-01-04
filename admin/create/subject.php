<?php 

require("../layout/db.php");

$name = $_POST['name'];
$code = $_POST['code'];
$sem = $_POST['sem'];
$reg = $_POST['reg'];
$type = $_POST['type'];
$sql = "INSERT INTO sub (name ,code,sem,reg,type,dept)
VALUES ('$name','$code','$sem','$reg','$type','$department')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/subject.php?page=1&msg=Subject added Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>