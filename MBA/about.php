<?php require("./static/db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MBA - SJCET</title>
  <link rel="stylesheet" href="/static/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/style.css">
  <link rel="icon" href="/static/images/favicon.png">
  <link href="/static/css/aos.css" rel="stylesheet">
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
            <a class="nav-link active" aria-current="page" href="/about.php">About</a>
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

  <main style="margin-top:76px">
    <section class="container pt-4 pb-4" >
      <h1 class="heading">ABOUT THE DEPARTMENT</h1>
      <article class="container"  data-aos="fade-up" data-aos-once="true">
        <p class="content">
          &ensp;&ensp;The MBA department was started in the year 2008 with an intake of 120. It is approved by AICTE, New Delhi and affiliated to Anna University, Chennai. The Department offers MBA in Finance, Marketing, Human Resources and Systems & Operations. The department provides a new approach to leadership, emphasizing a proactive, entrepreneurial and responsible way of thinking and acting. We also provides extensive opportunities to apply theory in practice, through project work based on organization.
        </p>
        <div class="container">
          <div class="row gx-4">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
              <div class="vision">
                <img src="/static/images/vision.png" alt="vision">
                <h3>VISION</h3>
                <p style="text-align:justify !important;" class="container" >
                To continue to be recognized as a premier global management school operating at the frontiers of management education and practice while creating a progressive and sustainable impact on society.
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
              <div class="vision">
                <img src="/static/images/mission.png" alt="mission">
                <h3>MISSION</h3>
                <p style="text-align:justify !important;" class="container" >
                To maintain excellent standards of pedagogy with the right emphasis on experimental and process oriented learning.To develop students as a change agent and powerful role models with entrepreneurial aspirations along with strong moral and ethical values and social sensitivity.
                </p>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
    <section class="container"  data-aos="fade-up" data-aos-once="true">
      <h1 class="heading">MESSAGE FROM DEPARTMENT HOD</h1>
      <div class="container">
      <article class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 pt-2 pb-2">
          <div style="display:flex;align-items:center;flex-direction:column;height:100%;justify-content:center">
            <?php
            $sql = "SELECT * FROM staff WHERE place='1' AND dept='$department' limit 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
              <img  data-aos="zoom-in" data-aos-once="true" src="/static/uploads/staff/image/<?php echo $row['pic'] ?>" width="50%" height="auto" class="hod-img" alt="">
              <a href="/static/uploads/staff/<?php echo $row['pdf'] ?>" style="text-decoration:none;">
                <p class="hod">
                  <?php echo $row['name'] ?><br>
                  <span class="text-muted"><?php echo $row['position'] ?></span><br>
                  <span class="text-muted">Email : <?php echo $row['email'] ?></span>
                </p>
              </a>
              <?php }} ?>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 pt-2 pb-2"  data-aos="fade-up" data-aos-once="true">
          <p class="content">
            &ensp;&ensp;The motto behind our MBA department is to deploy students towards best career. We professionally train our students in FINANCE, HUMAN RESOURCES, SYSTEMS and MARKETING with industrial exposure. We put them in an experience to swim their mundane life with steady background in Intelligence Quotient, Emotional Quotient and Job ability Quotient.
          <p>
          <p class="content">
            &ensp;&ensp;We work smart to put their legs in higher altitude by means of great attitude and aptitude tuned by club activities. Our MAJASTIC club continually doing motivational, social responsibility and other inspirational expo to bring students talent. We are here to provide today’s hot potatoes to our students through arranging International Industrial Visit, Students interaction with global buddies and active ED cell with no strings attached.
          </p>
          <p class="content">
            &ensp;&ensp;On our part we can assure you of our dedicated support to your desired level. In current job market razzle-dazzle scenario, instead of blue, brown, pink or red color, guarantied assurance for white color jobs for the student’s better future will be given.
          </p>
        </div>
      </article>
      </div>
    </section>
    <section class="container pb-2"  data-aos="fade-up" data-aos-once="true">
      <h1 class="heading">Program Educational Objectives (PEOs)</h1>
      <ul class="pt-2">
        <li>
          <p style="text-decoration:underline">PEO1</p>
          <p class="conatiner content">
          To have a thorough understanding of the core aspects of the business.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO2</p>
          <p class="conatiner content">
          To provide the learners with the management tools to identify, analyze and create business opportunities as well as solve business problems.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO3</p>
          <p class="conatiner content">
          To prepare them to have a holistic approach towards management functions.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO4</p>
          <p class="conatiner content">
          To motivate them for continuous learning.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO5</p>
          <p class="conatiner content">
          To inspire and make them practice ethical standards in business.
          </p>
        </li>
      </ul>
    </section>

    <section class="container pb-2" data-aos="fade-up" data-aos-once="true">
      <h1 class="heading">Program Specific Outcomes (PSOs)</h1>
      <ul class="pt-2">
        <li>
          <p style="text-decoration:underline">PSO1</p>
          <p class="conatiner content">
          Develop the students into effective leaders and administrators ready to face the challenges of corporate world.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PSO2</p>
          <p class="conatiner content">
          Inculcate the social, legal and ethical responsibilities of Business among the students to become responsible citizens of the country.
          </p>
        </li>
      </ul>
    </section>

    <section class="container pb-2" data-aos="fade-up" data-aos-once="true">
      <h1 class="heading">Program Outcomes (POs)</h1>
      <ul class="pt-2">
        <li>
          <p style="text-decoration:underline">PO1</p>
          <p class="conatiner content">
          Ability to apply the business acumen gained in practice.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO2</p>
          <p class="conatiner content">
          Ability to understand and solve managerial issues.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO3</p>
          <p class="conatiner content">
          Ability to communicate and negotiate effectively, to achieve organizational and individual goals.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO4</p>
          <p class="conatiner content">
          Ability to upgrade their professional and managerial skills in their workplace.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO5</p>
          <p class="conatiner content">
          Ability to explore and reflect about managerial challenges, develop informed managerial decisions in a dynamically unstable environment.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO6</p>
          <p class="conatiner content">
          Ability to take up challenging assignments.
          </p>
        </li>
        <li>
            <p style="text-decoration:underline">PO7</p>
            <p class="conatiner content">
            Ability to understand one’s own ability to set achievable targets and complete them.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO8</p>
          <p class="conatiner content">
          Ability to pursue lifelong learning.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO9</p>
          <p class="conatiner content">
          To have a fulfilling business career.
          </p>
        </li>
      </ul>
    </section>
    
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