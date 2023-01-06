<?php require("./static/db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S&H - SJCET</title>
  <link rel="stylesheet" href="/static/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/style.css">
  <link rel="icon" href="/static/images/favicon.png">
  <script src="/static/js/moment.js"></script>
  <link rel="stylesheet" href="/static/css/aos.css">

</head>

<body>
<!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg " style="z-index:10000;background:white;box-shadow:1px 1px 2px #aaa;">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://sjcettnj.edu.in">
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
            <a class="nav-link " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/curriculum.php">Curriculum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/infra.php">Infrastructure</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/faculty.php">Faculty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/activities.php">Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/news&events.php">Events & News</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main style="margin-top:76px">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4">
        <section class="container pt-4" style="width:100% !important;">
          <h1 class="heading">Achievements</h1>
          <article class="container pt-2">
            <ul class="timeline">
              <li class="timeline-item mb-2">
                <h2 class="text-muted" style="font-size:18px !important;font-weight:600;color:#00822c !important">Student Achievements</h2>
                <ul  data-aos="fade-up" data-aos-once="true">
                  <?php
                  $sql = "SELECT * FROM ac WHERE dept='$department' AND title='student' order by ac_date DESC ,id DESC LIMIT 20";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                  ?>
                  <li>
                    <p style="color:#333 !important">
                      <span class="text-muted" style="color:#C2001B !important">Name :</span><span style="font-weight:600"><?php echo $row["name"] ?></span><br>
                      <span class="text-muted" style="color:#C2001B !important">Description :</span><?php echo $row["content"] ?><br>
                      <span class="text-muted" style="color:#C2001B !important">Date :</span>
                      <script>
                        document.write(moment("<?php echo($row["ac_date"])?>").format('ll'))
                      </script>
                    </p>
                  </li>
                  <?php }} ?>
                </ul>
              </li>
              <li class="timeline-item mb-2">
                <h2 class="text-muted" style="font-size:18px !important;font-weight:600;color:#00822c !important">Staff Achievements</h2>
                <ul  data-aos="fade-up" data-aos-once="true">
                  <?php
                  $sql = "SELECT * FROM ac WHERE dept='$department' AND title='staff' order by ac_date DESC , id DESC LIMIT 20";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                  ?>
                  <li>
                    <p style="color:#333 !important">
                      <span class="text-muted" style="color:#C2001B !important">Name :</span><span style="font-weight:600"><?php echo $row["name"] ?></span><br>
                      <span class="text-muted" style="color:#C2001B !important">Description :</span><?php echo $row["content"] ?><br>
                      <span class="text-muted" style="color:#C2001B !important">Date :</span>
                      <script>
                        document.write(moment("<?php echo($row["ac_date"])?>").format('ll'))
                      </script>
                    </p>
                  </li>
                  <?php }} ?>
                </ul>
              </li>
            </ul>
          </article>
        </section>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4">
        <section class="container pt-4" style="width:100% !important;">
          <h1 class="heading">Seminar & Conference</h1>
          <article class="container pt-2">
            <ul class="timeline">
              <?php 
              $sql = "SELECT * FROM sem WHERE dept='$department' order by start_date DESC , id DESC LIMIT 20";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
              ?>
              <li class="timeline-item mb-2"  data-aos="fade-up" data-aos-once="true">
                <p style="color:#333 !important">
                  <span class="text-muted" style="color:#C2001B !important">Event :</span><span style="font-weight:600"><?php echo $row['name'] ?></span><br>
                  <span class="text-muted" style="color:#C2001B !important">Guest Name :</span><?php echo $row['guest'] ?><br>
                  <span class="text-muted" style="color:#C2001B !important">Organized by:</span><?php echo $row['org'] ?><br>
                  <span class="text-muted" style="color:#C2001B !important">Date:</span>
                  <script>
                    document.write(moment("<?php echo($row["start_date"])?>").format('ll'))
                  </script> - 
                  <script>
                    document.write(moment("<?php echo($row["end_date"])?>").format('ll'))
                  </script>
                </p>
              </li>
              <?php }} ?>
            </ul>
          </article>
        </section>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4">
          <section class="container pt-4" style="width:100% !important;">
            <h1 class="heading">MoUs</h1>
            <article class="container pt-2">
              <ul class="timeline"  >
                <?php
                $sql = "SELECT * FROM mou WHERE dept='$department' order by mou_year DESC , id DESC LIMIT 20";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                <a  href="/static/uploads/mou/<?php echo $row['pdf']?>" style="text-decoration:none" target="blank">
                  <li  data-aos="fade-up" data-aos-once="true" class="timeline-item mb-2">
                    <p style="color:#333 !important">
                      <span class="text-muted" style="color:#C2001B !important">Company Name :</span><span style="font-weight:600"><?php echo $row['name']?></span><br>
                      <span class="text-muted" style="color:#C2001B !important">Details :</span><?php echo $row['content']?><br>
                      <span class="text-muted" style="color:#C2001B !important">Year :</span><?php echo $row['mou_year']?>
                    </p>
                  </li>
                </a>
                <?php }} ?>
              </ul>
            </article>
          </section>
        </div>
      </div>
    
    
  </main>

  <footer class="container-fluid pt-4 mt-2" style="background-color: #444;">
    <div class="container">
        <div class="row gy-2 gx-5">
            <div class="col-lg-5 col-md-6">
                <h5 style="color:#fff">Contact Us</h5>
                <p class="small text-white">
                  A.S Nagar, Elupatti, Thanjavur - 613 403, Tamil Nadu.<br>
                  Mobile No : 9444395284, 9150076739<br>
                  Email : sjcet.tnj@gmail.com
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-1 text-white">Quick links</h5>
                <ul class="list-unstyled text-muted">
                    <li><a style="color:#fff" href="/">Home</a></li>
                    <li><a style="color:#fff" href="/about.php">About</a></li>
                    <li><a style="color:#fff" href="/curriculum.php">Curriculum</a></li>
                    <li><a style="color:#fff" href="/infra.php">Infrastructure</a></li>
                    <li><a style="color:#fff" href="/faculty.php">Faculty</a></li>
                    <li><a style="color:#fff" href="/activities.php">Activities</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15681.995472249564!2d79.0959503!3d10.6959517!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c07b83f4b3c1765!2sSt.%20Joseph&#39;s%20College%20of%20Engineering%20and%20Technology%20(DMI%20Group)!5e0!3m2!1sen!2sin!4v1672648792970!5m2!1sen!2sin" width="100%" height="200px" style="border:0;border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <hr style="color:#fff" size="2">
    <div class="container text-center text-white">
      <small>2023 &copy; St. Joseph's College of Engineering & Technology | All Rights Reserved | Powered By SJCET Web Team</small>
    </div>
  </footer>
  <script type="text/javascript" src="/static/js/bootstrap.bundle.js" defer></script>
  <script type="text/javascript" src="/static/js/jquery.min.js" defer></script>
  <script type="text/javascript" src="/static/script.js" defer></script>
  <script type="text/javascript" src="/static/js/aos.js" ></script>
  <script>
    AOS.init();
  </script>
</body>
</html>