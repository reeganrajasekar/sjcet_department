<?php require("./static/db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSE - SJCET</title>
  <link rel="stylesheet" href="/static/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/style.css">
  <link rel="icon" href="/static/images/favicon.png">
  <script src="/static/js/moment.js"></script>
  <link href="/static/css/aos.css" rel="stylesheet">
</head>

<body  >
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
            <a class="nav-link active" aria-current="page" href="/">Home</a>
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
            <a class="nav-link " aria-current="page" href="/activities.php">Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/news&events.php">Events & News</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Carousel -->

  <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" style="margin-top: 76px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="/static/images/1.jpg" class="d-block w-100" loading="lazy" alt="Slide_1">
      </div>
      <div class="carousel-item">
        <img src="/static/images/1.jpg" class="d-block w-100" alt="Slide_2">
      </div>
      <div class="carousel-item">
        <img src="/static/images/1.jpg" class="d-block w-100" alt="Slide_3">
      </div>
      <div class="carousel-item">
        <img src="/static/images/1.jpg" class="d-block w-100" alt="Slide_4">
      </div>
      <div class="carousel-item">
        <img src="/static/images/1.jpg" class="d-block w-100" alt="Slide_5">
      </div>
    </div>
  </div>

<!-- Welcome Note -->

  <main>
    <section class="container mt-2 mb-2">
      <h1 class="welcome">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</h1>
      <p  class="content">
        &ensp;&ensp;The department was started during the academic year 2007-2008 with approval from AICTE and affiliation 
        from Anna University Chennai to formulate proficient professionals to become part of the engineering and 
        research association at the worldwide levels. The department has experienced faculty members with 
        different specialization in Computer Science and Engineering. The department provides placement opportunities 
        in well-established organizations and MNCs.<br>
        &ensp;&ensp;Students are trained both quantitatively and qualitatively during the lab session that enhance their 
        understanding and helps further to motivate them to taking projects and proves as a helping hand to do 
        their projects efficiently. Practical awareness is inculcated to the students by arranging many national 
        conferences, Seminars, FDP and workshop in association with CSI and ICTACT. Value added programs are 
        conducted to improve student's soft skills.
      </p>
    </section>
    <section style="background-color: #f5f5f5;" data-aos="fade-up" data-aos-once="true">
      <article class="container pt-2 pb-2" >
        <br>
        <h1 class="heading">PROGRAM WE OFFER</h1>
        <article class="container">
          <ol style="color: #922521;font-weight: 800;font-size: 21px;">
            <li >
              <h2 class="program">B.E. CSE</h2>
              <p class="content">
                An Engineering program which seamlessly articulates the concepts from basic science to 
                technology with relevant practice through lab and projects for building the problem solving
                 skills, keeping industry requirements in place. Students will develop competence in 
                 areas like Programming, Database Management Systems, Networks and Security, Operating 
                 Systems, Cloud Computing etc. To enable the students to keep pace with changing 
                 technological advances, the university has industrial tie-ups with Oracle and SAP. 
                 Studying these courses as a part of the curriculum would provide a WILD CARD entry to 
                 industry.
              </p>
            </li>
          </ol>
        </article>
      </article>
    </section>
    <section class="container mt-2">
      <div class="row gx-2">
        <article class="col-sm-12 col-md-12 col-lg-8 mb-2" data-aos="fade-right" data-aos-once="true">
          <div class="events">
            <h1 class="heading">Latest Events @ CSE-SJCET</h1>
            <section class="row gx-2 mx-1">
              
              <?php
              $sql = "SELECT * FROM event WHERE dept='$department' order by event_date DESC LIMIT 2";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
              ?>
              <article class="col-sm-12 col-md-6 col-lg-4 mb-1">
                <div class="event" title="<?php echo $row['title']?>" data-aos="fade-in" data-aos-once="true">
                  <div class="eventimg">
                    <img src="/static/uploads/event/image/<?php echo $row['img']?>" alt="" loading="lazy">
                  </div>
                  <div class="eve">
                    <a href="/static/uploads/event/<?php echo $row['pdf']?>" target="blank" style="text-decoration:none">
                      <p class="eventp"><?php echo substr($row['title'],0,40).'...'?></p>
                    </a>
                    <p class="eventpdate">
                      <script>
                        document.write(moment("<?php echo($row["event_date"])?>").format('ll'))
                      </script>
                    </p>
                  </div>
                </div>
              </article>
              <?php }} ?>
              <article class="col-sm-12 col-md-12 col-lg-4 mb-1" style="display: flex;flex-direction: column;justify-content: space-around;align-items:center;">
                <p style="padding-top: 10px;text-align: left;">Learners are matured in a specific area of specialization by extending their
                   prior knowhow through meticulous set of advanced
                </p>
                <a class="btn text-center" style="color:#922521;border:2px solid #922521;border-radius: 15px;;" href="/news&events.php#event">View All Events</a>
              </article>
            </section>
          </div>
        </article>
        <article class="col-sm-12 col-md-12 col-lg-4 mb-2" data-aos="fade-left" data-aos-once="true">
          <div class="news">
            <h1 class="heading">Department News</h1>
            <hr>
            <div class="holder">
              <ul id="ticker01">
                <?php
                $sql = "SELECT * FROM news WHERE dept='$department' order by news_date DESC LIMIT 10";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                <li>
                  <span>
                    <script>
                      document.write(moment("<?php echo($row["news_date"])?>").format('ll'))
                    </script>
                  - </span><a target="blank" href="/static/uploads/<?php echo $row['pdf']?>"><?php echo $row['title']?></a></li>
                <?php }} ?>
              </ul>
            </div>
            <a href="/news&events.php#news" class="btn" style="float: right;color:#922521;text-decoration: underline;">more...</a>
          </div>
        </article>
      </div>
    </section>
  </main>

  <footer class="w-100 pt-4 mt-2 flex-shrink-0" style="background-color: #444;">
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
                    <li><a style="color:#fff" href="/curriculam.php">Curriculam</a></li>
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