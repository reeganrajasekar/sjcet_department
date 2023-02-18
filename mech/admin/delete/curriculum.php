<?php 

require("../layout/db.php");
$id = $_POST['id'];
$sql = "DELETE FROM sub WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    unlink("../../static/uploads/reg/reg/".$_POST['reg_file']);
    unlink("../../static/uploads/reg/sy/".$_POST['sy_file']);
    unlink("../../static/uploads/reg/oe/".$_POST['oe_file']);
    header("Location: /admin/curriculum.php?page=1&msg=Regulation deleted Successfully !");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>