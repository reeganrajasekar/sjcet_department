<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM sem WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/seminar.php?page=1&msg=Seminar / Conference deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>