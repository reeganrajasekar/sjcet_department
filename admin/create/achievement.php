<?php 

require("../layout/db.php");

$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$ac_date = $_POST['ac_date'];
$sql = "INSERT INTO ac (name ,title, content , dept , ac_date)
VALUES ('$name','$title','$content', 'CSE' , '$ac_date')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/achievement.php?page=1&msg=Achievement added Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>