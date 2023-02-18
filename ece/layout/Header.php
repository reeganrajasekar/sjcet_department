<?php 
$servername = "localhost:3306";
$username = "sjcet";
$password = "%9S86d5bl";
$db_name = "sjcettnj_sjcet";
$department = 'EEE';
$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECE - SJCET</title>
  <link rel="stylesheet" href="/static/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/style.css">
  <link rel="icon" href="/static/images/favicon.png">
  <script src="/static/js/moment.js"></script>
  <link href="/static/css/aos.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
</head>

<body>

<header id="header">
    <a href="#" style="color:#fff;padding:5px;font-weight:600;text-decoration:none;width:auto">TNEA Counselling Code: 3825</a>
    <a href="https://sjcettnj.edu.in" target="blank" style="text-align:center;color:#C2001B;padding:5px;font-weight:600;text-decoration:none;background-color:#fff;align-items:center;border-radius:3px">SJCET Home</a>
</header>
<nav id="navbar_top" class="navbar  navbar-expand-lg " style="padding:0px;z-index:1000;background:white;box-shadow:1px 1px 2px #aaa;flex-direction:column">
  <div class="container-fluid" style="padding:8px">
    <a class="navbar-brand" href="/">
      <img src="/static/images/logo.png" alt="College Logo" class="col-logo">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span> </span>
      <span> </span>
      <span> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/Index.php' || $_SERVER['PHP_SELF'] == '/index.php'){ echo 'active'; } ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/about.php'){ echo 'active'; } ?>" aria-current="page" href="/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/curriculum.php'){ echo 'active'; } ?>" aria-current="page" href="/curriculum.php">Curriculum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/infra.php'){ echo 'active'; } ?>" aria-current="page" href="/infra.php">Infrastructure</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/faculty.php'){ echo 'active'; } ?>" aria-current="page" href="/faculty.php">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/activities.php'){ echo 'active'; } ?>" aria-current="page" href="/activities.php">Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/news&events.php'){ echo 'active'; } ?>" aria-current="page" href="/news&events.php">Events & News</a>
        </li>
      </ul>
    </div>
  </div>
</nav>