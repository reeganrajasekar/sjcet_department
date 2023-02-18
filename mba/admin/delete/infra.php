<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM lab WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../static/uploads/lab/".$_POST['pdf']);
    unlink("../../static/uploads/lab/image/".$_POST['img']);
    header("Location: /admin/infra.php?page=1&msg=Lab Detail deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>