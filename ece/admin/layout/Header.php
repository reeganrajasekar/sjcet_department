<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SJCET</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/style.css">
    <link rel="icon" href="/static/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/static/js/moment.js"></script>

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background:white;box-shadow:1px 1px 2px #aaa;">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
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
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/home.php'){ echo 'active'; } ?>" aria-current="page" href="/admin/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/news.php'){ echo 'active'; } ?>" aria-current="page" href="/admin/news.php?page=1">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/event.php'){ echo 'active'; } ?>" href="/admin/event.php?page=1">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/staff.php'){ echo 'active'; } ?>" href="/admin/staff.php">Staff</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/curriculum.php'){ echo 'active'; } ?>" href="/admin/curriculum.php?page=1">Curriculum</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/infra.php'){ echo 'active'; } ?>" href="/admin/infra.php?page=1">Infrastructure</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/achievement.php'){ echo 'active'; } ?>" href="/admin/achievement.php?page=1">Achievement</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/admin/mou.php'){ echo 'active'; } ?>" href="/admin/mou.php?page=1">MoU</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" onclick="return confirm('Do you want to Logout?')" href="/admin/logout.php">Logout</a>
                    </li>

                    
                </ul>
            </div>
        </div>
    </nav>