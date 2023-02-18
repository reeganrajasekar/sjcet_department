<?php
session_start();
if ($_POST["email"]=="priyanarasimman@sjcettnj.edu.in") {
    if ($_POST["password"]=="aathi2018") {
        $_SESSION["lock"] = "xiny9387tdpq##*&B98oyo8B@*O&^PB^B$";
        header("Location: /admin/home.php");
        die();
    } else {
        header("Location: /admin/?err=username or password is incorrect!");
        die();
    }
} else {
    header("Location: /admin/?err=username or password is incorrect!");
    die();
}


?>