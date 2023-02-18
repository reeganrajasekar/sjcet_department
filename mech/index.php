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
      <h1 class="welcome">DEPARTMENT OF MECHANICAL ENGINEERING</h1>
      <p  class="content">
        &ensp;&ensp;The department was started during the academic year 2007-2008 with approval from AICTE and affiliation from Anna University Chennai to formulate proficient professionals to become part of the engineering and research association at the worldwide levels. Mechanical engineering deals with machinery design, fluid components production and manufacturing design and operation, therefore is a very interesting filed which keeps the interest of the students in place. The department provides placement opportunities in well-established organizations.<br><br>
        &ensp;&ensp;Our Department of mechanical engineering is committed to prepare graduates by providing them the best outcome based teaching-learning experience and scholarship enriched with professional ethics.
      </p>
    </section>
    <section style="background-color: #f5f5f5;" data-aos="fade-up" data-aos-once="true">
      <article class="container pt-2 pb-2" >
        <br>
        <h1 class="heading">PROGRAM WE OFFER</h1>
        <article class="container">
          <ol style="color: #922521;font-weight: 800;font-size: 21px;">
            <li >
              <h2 class="program">B.E. Mech</h2>
              <p class="content">
              The B.E. Mechanical Engineering program aims to provide students with adequate technical knowledge and skills for a successful career in diverse fields like product development, design, development, and implementation of engineering systems and services and processes.
              </p>
              <p class="content">
              The core courses in the program are production engineering, design engineering, and thermal engineering. Students can learn modern software related to drafting, modeling, and analysis in our CAD laboratory. The program includes the latest subjects like finite element method, robotic engineering, computational fluid dynamics, entrepreneurship, computer-aided modeling & design, and rapid prototyping.
              </p>
              <p class="content">
              Students learn to develop competitive technologies and find solutions to engineering problems impacting industry and society. They learn to be team players, lead and engage diverse teams through effective communication, and acquire interpersonal and project management skills.
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
          <h1 class="heading">Latest Events @ Mech-SJCET</h1>
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