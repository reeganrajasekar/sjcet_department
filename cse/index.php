<?php require("./layout/Header.php") ?>
<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="/static/images/1.jpg" class="d-block w-100" alt="Slide_1">
    </div>
    <div class="carousel-item">
      <img src="/static/images/2.jpg" class="d-block w-100" loading="lazy" alt="Slide_2">
    </div>
    <div class="carousel-item">
      <img src="/static/images/3.jpg" class="d-block w-100" loading="lazy" alt="Slide_3">
    </div>
    <div class="carousel-item">
      <img src="/static/images/4.jpg" class="d-block w-100" loading="lazy" alt="Slide_4">
    </div>
    <div class="carousel-item">
      <img src="/static/images/5.jpg" class="d-block w-100" loading="lazy" alt="Slide_5">
    </div>
  </div>
</div>

<main>
  <section class="container mt-2 mb-2">
    <h1 class="welcome">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</h1>
    <p class="content">
      &ensp;&ensp;The department was started during the academic year 2007-2008 with approval from AICTE and affiliation 
      from Anna University Chennai to formulate proficient professionals to become part of the engineering and 
      research association at the worldwide levels. The department has experienced faculty members with 
      different specialization in Computer Science and Engineering. The department provides placement opportunities 
      in well-established organizations and MNCs.<br><br>
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
            &ensp;&ensp;Computer science is a very vast discipline and one of the most popular engineering courses 
            in the country. B.E.(Computer Science and Engineering) Course lays emphasis on training students about the basics and different 
            aspects of computer engineering. The scope for a computer science engineer can range from 
            development, design, manufacture, maintenance and assembly. Other various roles offered to a 
            computer science engineer are: Software Developers, Programmers, Web developers, Hardware Engineers, System Designers, System Analysts, Networking Engineers, Database Administrators, etc.
            </p>
          </li>
        </ol>
      </article>
    </article>
  </section>

  <section class="container mt-2">
    <div class="row equal-cols gx-2 mx-1">
      <article id="event" class="col-sm-12 col-md-12 col-lg-8 mb-2 h-100" data-aos="zoom-in" data-aos-once="true">
        <div class="news">
          <h1 class="heading">Latest Events @ CSE-SJCET</h1>
          <section class="row equal-cols gx-2 mx-1">
            <?php
            $sql = "SELECT * FROM event WHERE dept='".$department."' order by event_date DESC LIMIT 2";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <article class="col-sm-12 col-md-6 col-lg-4 mb-1">
              <div title="<?php echo $row['title']?>" class="card w-100" data-aos="fade-in" data-aos-once="true" >
                <img loading="lazy" src="/static/uploads/event/image/<?php echo $row['img']?>" class="card-img-top" alt="Event Image">
                <div class="card-body text-center">
                  <span class="content"><?php echo substr($row['title'],0,30).'...'?></span><br>
                  <span class="text-muted">
                    <script>
                      document.write(moment("<?php echo($row["event_date"])?>").format('ll'))
                    </script>
                  </span>
                </div>
              </div>
            </article>
            <?php }} ?>
            <article class="col-sm-12 col-md-12 col-lg-4 mb-1 " style="display: flex;flex-direction: column;justify-content: space-around;align-items:center;">
              <p class="content">
                At SJCET, we keep on organising various events and functions from time to time for the welfare of students in terms of technical skill development and personal growth.
              </p>
              <a class="btn text-center" style="color:#C2001B;border:2px solid #C2001B;border-radius: 15px;;" href="/news&events.php#event">View All Events</a>
            </article>
          </section>
        </div>
      </article>
      <article class="col-sm-12 col-md-12 col-lg-4 mb-2 h-100" data-aos="zoom-in" data-aos-once="true">
        <div class="news" id="news">
          <h1 class="heading">Department News</h1>
          <div class="holder" id="holder">
            <ul id="ticker01">
              <?php
              $sql = "SELECT * FROM news WHERE dept='".$department."' order by news_date DESC LIMIT 10";
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
          <a href="/news&events.php#news" class="btn pt-2" style="float: right;color:#C2001B;text-decoration: underline;">more...</a>
        </div>
      </article>
    </div>
  </section>
</main>

<?php require("./layout/Footer.php") ?>