<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM mou WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../static/uploads/mou/".$_POST['pdf']);
    header("Location: /admin/mou.php?page=1&msg=MoU deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>