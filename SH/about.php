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
        &ensp;&ensp;The Science and Humanities department was established in the year of 2007. The Department endeavors to integrate humanistic values with academic learning through introduction of relevant and innovative eras. Science and Humanities lays down the basement for every budding engineer with the essential brass tacks and vital ingredients of engineering education to make the students help in shaping themselves as conquering engineers in building the nation’s prosperity.
        <br><br>
        &ensp;&ensp;The aim of the Department is to broadly educate aspiring engineering students in the basics of Mathematics, Physics, Chemistry & English which serve as a platform for the growth of students in their further study of Technical subjects. The strength of the Department lies in the perfect synchronization of knowledge and skills. The major motivating factor of the department is the commitment and team work that is exhibited in the teaching – learning process. <br><br>
        &ensp;&ensp;The faculty members of the Department actively participate and present papers in conferences and attend programmes such as workshops, seminars, FDP etc.. Various guest lectures and industrial visits are arranged for the students to acquire practical knowledge in their course of study.
        </p>
        <div class="container">
          <div class="row gx-4">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
              <div class="vision">
                <img src="/static/images/vision.png" alt="vision">
                <h3>VISION</h3>
                <p style="text-align:justify !important;" class="container" >
                  To provide strong fundamentals in Science and Technology in the
                  undergraduate level degree programs , To introduce innovative teaching methodologies and evaluation strategies
                  this shall chisel the professional etiquette of the students.
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
              <div class="vision">
                <img src="/static/images/mission.png" alt="mission">
                <h3>MISSION</h3>
                <p style="text-align:justify !important;" class="container" >
                  To inspire and prepare the students with technical skills bundled with
                interpersonal skills to make them best qualified for future needs, 
                To promote nation – building activities in science, technology,
                humanities and management through research.
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
            &ensp;&ensp;The Department of S&amp;H is one of the premiere Departments, in St. Joseph`s College of
            Engineering &amp; Technology,Thanjavur and has a lion`s share in the prominence and the progress of
            this great educational institution. The department has well equipped The Department is actively
            engaged in organizing seminars, workshops and guest lectures every year The Department also
            offers remedial classes for the slow learners.
            <br><br>
            &ensp;&ensp;The Department stands focused to its ideals in imparting knowledge and preparing the
            students towards achieving academic excellence through the acquisition of core competence
            which is relevant to the engineering professionals.
          <p>
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
          Global Reputation: To create value added, disciplined, high profile
          engineering professionals for successful careers in their related industry that makes
          them globally reputed.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO2</p>
          <p class="conatiner content">
          Fundamental Knowledge: To develop the students with a sound
          foundation in Mathematical, Scientific and Engineering fundamentals necessary to
          synthesize the technical core concepts focusing on skill development and knowledge
          up gradation which will lead to technical innovations.
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
          To develop the basic reading and writing skills of first year engineering and
          technology students.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PSO2</p>
          <p class="conatiner content">
          To enhance the fundamental knowledge in Physics, Chemistry and its
          applications relevant to various streams of Engineering and Technology.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PSO3</p>
          <p class="conatiner content">
          To provide the basic tools of calculus mainly for the purpose of modeling the
          engineering problems mathematically and obtaining solutions.
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
          Communication: Communicate effectively on complex engineering
          activities with the engineering community and with society at large, such as,
          being able to comprehend and write effective reports and design
          documentation, make effective presentations, and give and receive clear
          instructions.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO2</p>
          <p class="conatiner content">
          Creativity and Design: To develop the ability among students to synthesize
          the simulated outcomes and technical concepts for application to mechanical
          elements and product design.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO3</p>
          <p class="conatiner content">
          Core Competencies: To provide necessary foundation on computational
          platforms to solve challenging practical problems in multidisciplinary areas
          and its application towards product development in the respective field of
          engineering.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO4</p>
          <p class="conatiner content">
          Engineering knowledge: Apply the knowledge of mathematics, science,
          engineering fundamentals, and an engineering specialization to the solution
          of complex engineering problems.
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