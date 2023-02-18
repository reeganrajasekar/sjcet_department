<?php require("./layout/Header.php") ?>

<main class="container-fluid mt-2">
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

<?php require("./layout/Footer.php") ?>