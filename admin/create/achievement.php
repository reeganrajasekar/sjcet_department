<?php 

require("../layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$name = test_input($_POST['name']);
$title = test_input($_POST['title']);
$content = test_input($_POST['content']);
$ac_date = test_input($_POST['ac_date']);
$sql = "INSERT INTO ac (name ,title, content , dept , ac_date)
VALUES ('$name','$title','$content', '$department' , '$ac_date')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/achievement.php?page=1&msg=Achievement added Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>