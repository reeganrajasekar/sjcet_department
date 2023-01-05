<?php 

require("../layout/db.php");
$file_name = strtotime("now").$_FILES["reg_file"]["name"];
$target_dir = "../../static/uploads/reg/reg/";
$target_file = $target_dir . basename($file_name);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$syfile_name = strtotime("now").$_FILES["sy_file"]["name"];
$sytarget_dir = "../../static/uploads/reg/sy/";
$sytarget_file = $sytarget_dir . basename($syfile_name);
$syuploadOk = 1;
$syimageFileType = strtolower(pathinfo($sytarget_file,PATHINFO_EXTENSION));

$oefile_name = strtotime("now").$_FILES["oe_file"]["name"];
$oetarget_dir = "../../static/uploads/reg/oe/";
$oetarget_file = $oetarget_dir . basename($oefile_name);
$oeuploadOk = 1;
$oeimageFileType = strtolower(pathinfo($oetarget_file,PATHINFO_EXTENSION));


// Check file size
if ($_FILES["reg_file"]["size"] > 5000000 && $_FILES["oe_file"]["size"] > 500000 && $_FILES["sy_file"]["size"] > 500000) {
    header("Location: /admin/curriculum.php?err=Sorry, your file is too large.");
    die();
}

// Allow certain file formats
if($imageFileType != "pdf" && $oeimageFileType != "pdf" && $syimageFileType != "pdf") {
    header("Location: /admin/curriculum.php?err=Sorry, File only PDF files are allowed.");
    die();
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location: /admin/curriculum.php?page=1&err=Sorry, your file was not uploaded.");
    die();
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["reg_file"]["tmp_name"], $target_file)) {
    if (move_uploaded_file($_FILES["oe_file"]["tmp_name"], $oetarget_file)) {
        if (move_uploaded_file($_FILES["sy_file"]["tmp_name"], $sytarget_file)) {
            $reg = $_POST['reg'];
            $sql = "INSERT INTO sub (reg , reg_file , oe_file , sy_file , dept)
            VALUES ('$reg' , '$file_name','$oefile_name','$syfile_name','$department')";
        
            if ($conn->query($sql) === TRUE) {
                header("Location: /admin/curriculum.php?page=1&msg=Event created Successfully !");
                die();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
            $conn->close();
        } else {
            header("Location: /admin/curriculum.php?page=1&err=Sorry, there was an error uploading your File.");
            die();
        }
    
    } else {
        header("Location: /admin/curriculum.php?page=1&err=Sorry, there was an error uploading your File.");
        die();
    }

  } else {
    header("Location: /admin/curriculum.php?page=1&err=Sorry, there was an error uploading your File.");
    die();
  }
}
?>