<?php 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
require("../layout/db.php");
$file_name = strtotime("now").$_FILES["pdf"]["name"];
$target_dir = "../../static/uploads/lab/";
$target_file = $target_dir . basename($file_name);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$imgfile_name = strtotime("now").$_FILES["img"]["name"];
$imgtarget_dir = "../../static/uploads/lab/image/";
$imgtarget_file = $imgtarget_dir . basename($imgfile_name);
$imguploadOk = 1;
$imgimageFileType = strtolower(pathinfo($imgtarget_file,PATHINFO_EXTENSION));


// Check file size
if ($_FILES["pdf"]["size"] > 5000000 && $_FILES["img"]["size"] > 500000) {
    header("Location: /admin/infra.php?err=Sorry, your file is too large.");
    die();
}

// Allow certain file formats
if($imageFileType != "pdf") {
    header("Location: /admin/infra.php?err=Sorry, File only PDF files are allowed.");
    die();
}

if($imgimageFileType != "jpg" && $imgimageFileType != "jpeg" && $imgimageFileType != "png") {
    header("Location: /admin/infra.php?err=Sorry, Image only jpg or jpeg or png files are allowed.");
    die();
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location: /admin/infra.php?page=1&err=Sorry, your file was not uploaded.");
    die();
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $imgtarget_file)) {
        $name = test_input($_POST['name']);
        $sql = "INSERT INTO lab (name , pdf , img , dept)
        VALUES ('$name' ,'$file_name','$imgfile_name', '$department')";
    
        if ($conn->query($sql) === TRUE) {
            header("Location: /admin/infra.php?page=1&msg=Lab Detail created Successfully !");
            die();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    
    } else {
        header("Location: /admin/infra.php?page=1&err=Sorry, there was an error uploading your image.");
        die();
    }

  } else {
    header("Location: /admin/infra.php?page=1&err=Sorry, there was an error uploading your file.");
    die();
  }
}
?>