<?php require("./layout/Header.php") ?>

<main class="container-fluid mt-2">
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
          $sql = "SELECT * FROM staff WHERE place='1' AND dept='".$department."' limit 1";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
          ?>
            <a href="/static/uploads/staff/<?php echo $row['pdf'] ?>" target="_blank" style="text-decoration:none;text-align:center">
              <img loading="lazy" data-aos="zoom-in" data-aos-once="true" src="/static/uploads/staff/image/<?php echo $row['pic'] ?>" width="50%" height="auto" class="hod-img" alt="">
              <p class="hod">
                <?php echo $row['name'] ?><br>
                <span class="text-muted"><?php echo $row['position'] ?></span><br>
                <span class="text-muted"><?php echo $row['email'] ?></span>
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

<?php require("./layout/Footer.php") ?>