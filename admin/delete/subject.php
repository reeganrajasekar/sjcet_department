<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM sub WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/subject.php?page=1&msg=Subject deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>