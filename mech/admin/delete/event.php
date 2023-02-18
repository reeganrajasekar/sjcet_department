<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM event WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../static/uploads/event/".$_POST['pdf']);
    unlink("../../static/uploads/event/image/".$_POST['img']);
    header("Location: /admin/event.php?page=1&msg=Event deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>