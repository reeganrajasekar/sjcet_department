<?php 

require("../layout/db.php");
$file_name = strtotime("now").$_FILES["pdf"]["name"];
$target_dir = "../../static/uploads/";
$target_file = $target_dir . basename($file_name);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check file size
if ($_FILES["pdf"]["size"] > 5000000) {
    header("Location: /admin/news.php?page=1&err=Sorry, your file is too large.");
    die();
}

// Allow certain file formats
if($imageFileType != "pdf") {
    header("Location: /admin/news.php?page=1&err=Sorry, only PDF files are allowed.");
    die();
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location: /admin/news.php?page=1&err=Sorry, your file was not uploaded.");
    die();
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
    $content = $_POST['content'];
    $news_date = $_POST['news_date'];
    $sql = "INSERT INTO news (title , pdf , dept , news_date)
    VALUES ('$content' , '$file_name' , 'CSE' , '$news_date')";

    if ($conn->query($sql) === TRUE) {
        header("Location: /admin/news.php?page=1&msg=News created Successfully !");
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  } else {
    header("Location: /admin/news.php?page=1&err=Sorry, there was an error uploading your file.");
    die();
  }
}
?>