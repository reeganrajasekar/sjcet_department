<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM staff WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../static/uploads/staff/".$_POST['pdf']);
    unlink("../../static/uploads/staff/image/".$_POST['img']);
    header("Location: /admin/staff.php?page=1&msg=Staff detail deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>