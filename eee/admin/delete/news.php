<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM news WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../static/uploads/".$_POST['pdf']);
    header("Location: /admin/news.php?page=1&msg=News deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>