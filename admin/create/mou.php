<?php 

require("../layout/db.php");
$file_name = strtotime("now").$_FILES["pdf"]["name"];
$target_dir = "../../static/uploads/mou/";
$target_file = $target_dir . basename($file_name);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check file size
if ($_FILES["pdf"]["size"] > 5000000) {
    header("Location: /admin/mou.php?page=1&err=Sorry, your file is too large.");
    die();
}

// Allow certain file formats
if($imageFileType != "pdf") {
    header("Location: /admin/mou.php?page=1&err=Sorry, only PDF files are allowed.");
    die();
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location: /admin/mou.php?page=1&err=Sorry, your file was not uploaded.");
    die();
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
    $name = $_POST['name'];
    $content = $_POST['content'];
    $mou_year = $_POST['mou_year'];
    $sql = "INSERT INTO mou (name , content , dept , pdf , mou_year)
    VALUES ('$name','$content', '$department' , '$file_name' , '$mou_year')";

    if ($conn->query($sql) === TRUE) {
        header("Location: /admin/mou.php?page=1&msg=MoU created Successfully !");
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  } else {
    header("Location: /admin/mou.php?page=1&err=Sorry, there was an error uploading your file.");
    die();
  }
}
?>