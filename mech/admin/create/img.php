<?php 
$target_dir = "../../static/images/";
$target_file = $target_dir . basename($_POST["id"].".jpg");
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check file size
if ($_FILES["img"]["size"] > 5000000) {
    header("Location: /admin/home.php?page=1&err=Sorry, your file is too large.");
    die();
}
$test = getimagesize($_FILES["img"]["tmp_name"]);
$width = $test[0];
$height = $test[1];

if ($width != 2000 || $height != 680)
{
  header("Location: /admin/home.php?err=Image size should be 2000px X 680px.");
  die();
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location: /admin/home.php?page=1&err=Sorry, your file was not uploaded.");
    die();
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    header("Location: /admin/home.php?msg=Image Uploaded Successfully!");
    die();
  } else {
    header("Location: /admin/home.php?page=1&err=Sorry, there was an error uploading your file.");
    die();
  }
}
?>