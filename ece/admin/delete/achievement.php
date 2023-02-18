<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM ac WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/achievement.php?page=1&msg=Achievement deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>