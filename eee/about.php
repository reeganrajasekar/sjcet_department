<?php require("./layout/Header.php") ?>

<main class="container-fluid mt-2">
  <section class="container pt-4 pb-4" >
    <h1 class="heading">ABOUT THE DEPARTMENT</h1>
    <article class="container"  data-aos="fade-up" data-aos-once="true">
      <p class="content">
      &ensp;&ensp;Department of Electrical and Electronics Engineering was established in the year 2007, 
      recognized by AICTE, New Delhi and affiliated to Anna University, Chennai with an intake of 60. 
      The department places equal emphasis on theoretical and practical domains of Electrical and 
      Electronics Engineering. The Department has well-qualified faculty and excellent facilities 
      for research.
      </p>
      <div class="container">
        <div class="row gx-4">
          <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
            <div class="vision">
              <img src="/static/images/vision.png" alt="vision">
              <h3>VISION</h3>
              <p style="text-align:justify !important;" class="container" >
              To develop competent Electrical Engineers to carry out research, meeting industrial needs 
              through technical education and ethical values. And to inculcate discipline, good quality 
              education, training, research and wide knowledge to meet the global standards.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
            <div class="vision">
              <img src="/static/images/mission.png" alt="mission">
              <h3>MISSION</h3>
              <p style="text-align:justify !important;" class="container" >
              To impart quality education and training in Electrical and Electronics Engineering with 
              an overall background suitable for making a successful Engineerand research or higher 
              education.To develop life-long learning skills that allows them to be adaptive and responsive to changes in society.
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
          &ensp;&ensp;It gives me immense pleasure to lead the department of Electrical and Electronics 
          Engineering (EEE) of this esteemed and prestigious institution. The Department of Electronics 
          and Communication Engineering strives hard to achieve technical excellence in the field of 
          Electronics and Communication Engineering interlaced with innovation.The department provides 
          academic ambience to nurture the spirit of innovation among the studentsand efforts are taken 
          to impart value based education.
        <p>
        <p class="content">
          &ensp;&ensp;Our department has a well-qualified faculty, who can take care of individual students 
          for their excellence in academics. Along with this we teach them ethics of life. We encourage 
          students to work in teams so that students learn the team spirit and leadership qualities under 
          the continuous guideline of the staff members.
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
            To have successful technical and professional careers in their chosen fields such 
            as circuit theory, Field theory, control theory and computational platforms.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO2</p>
          <p class="conatiner content">
            To engross in life long process of learning to keep themselves abreast of new developments
            in the field of Electronics and their applications in power engineering.
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
          To analyze, design and develop solutions by applying foundational concepts of electrical and electronics engineering.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PSO2</p>
          <p class="conatiner content">
          To apply design principles and best practices for developing quality products for scientific and business applications.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PSO3</p>
          <p class="conatiner content">
          To adapt to emerging electrical and electronics technologies to innovate ideas and solutions to existing/novel problems.
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
            <b>Engineering knowledge:</b> Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO2</p>
          <p class="conatiner content">
            <b>Problem analysis:</b> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO3</p>
          <p class="conatiner content">
            <b>Design/development of solutions:</b> Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO4</p>
          <p class="conatiner content">
            <b>Conduct investigations of complex problems:</b> Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO5</p>
          <p class="conatiner content">
            <b>Modern tool usage:</b> Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO6</p>
          <p class="conatiner content">
            <b>The engineer and society:</b> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.
          </p>
        </li>
        <li>
            <p style="text-decoration:underline">PO7</p>
            <p class="conatiner content">
              <b>Environment and sustainability:</b> Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO8</p>
          <p class="conatiner content">
            <b>Ethics:</b> Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO9</p>
          <p class="conatiner content">
            <b>Individual and team work:</b> Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO10</p>
          <p class="conatiner content">
            <b>Communication:</b> Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO11</p>
          <p class="conatiner content">
            <b>Project management and finance:</b> Demonstrate knowledge and understanding of the engineering and management principles and apply these to ones own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PO12</p>
          <p class="conatiner content">
            <b>Life-long learning:</b> Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.
          </p>
        </li>
      </ul>
    </section>
  
</main>

<?php require("./layout/Footer.php") ?>