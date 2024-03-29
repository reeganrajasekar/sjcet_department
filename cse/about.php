<?php require("./layout/Header.php") ?>

<main class="container-fluid mt-2">
  <section class="container pt-4 pb-4" >
    <h1 class="heading">About The Department</h1>
    <article class="container"  data-aos="fade-up" data-aos-once="true">
      <p class="content">
        &ensp;&ensp;The department was started during the academic year 2007-2008 with approval from AICTE and 
        affiliation from Anna University Chennai to formulate proficient professionals to become part 
        of the engineering and research association at the worldwide levels. The department has experienced 
        faculty members with different specialization in Computer Science and Engineering. The department 
        provides placement opportunities in well-established organizations and MNCs.
      </p>
      <p class="content">
        &ensp;&ensp;Students are trained both quantitatively and qualitatively during the lab session that enhance 
        their understanding and helps further to motivate them to taking projects and proves as a helping 
        hand to do their projects efficiently. Practical awareness is inculcated to the students by 
        arranging many national conferences, Seminars, FDP and workshop in association with CSI and 
        ICTACT. Value added programs are conducted to improve student's soft skills.
      </p>
      <div class="container">
        <div class="row gx-4">
          <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
            <div class="vision">
              <img src="/static/images/vision.png" alt="vision">
              <h3>VISION</h3>
              <p style="text-align:justify !important;" class="container" >
                To impart high quality technical education and thereby facilitating, equipping students 
                with latest skills in the field of computer science supplemented with practical orientation 
                to face challenges in the modern computing industry and academia for the betterment of 
                the society.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
            <div class="vision">
              <img src="/static/images/mission.png" alt="mission">
              <h3>MISSION</h3>
              <p style="text-align:justify !important;" class="container" >
                To develop innovative, competent and quality computer engineers by imparting the state-of-the-art technology.
                To enrich the knowledge of students through value based education.
                To endeavor for constant up gradation of technical expertise to cater to the needs of the society.
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
          &ensp;&ensp;The CSE Department at SJCET has been continuously fostering for academic excellence 
          through industry academy collaboration as we believe in Thinking, Innovation and Creativity 
          and create future computer scientists, engineers, IT professionals and responsible citizens 
          to serve the growing needs of computing in the society.
        <p>
        <p class="content">
          &ensp;&ensp;The Department is dedicated and committed to education, with equal emphasis on high quality 
          research and teaching in computer science and engineering.
        </p>
        <p class="content">
          &ensp;&ensp;Our faculty members aim at delivering top class education blending their rich research 
          experience with classroom teaching. The department motivates the staff members to pursue 
          higher studies and encourage them to attend conferences, workshops and publish papers in 
          national / international conferences/journals.The department of CSE provides platform for 
          the students to achieve their career goals and it is a pleasure to be the head of CSE department.
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
          To enable graduates to pursue higher education and research, or have a successful 
          career in industries associated with Computer Science and Engineering, or as entrepreneurs. 
          To ensure that graduates will have the ability and attitude to adapt to emerging 
          technological changes.
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
          To analyze, design and develop computing solutions by applying foundational concepts of Computer Science and Engineering.
        </p>
      </li>
      <li>
        <p style="text-decoration:underline">PSO2</p>
        <p class="conatiner content">
          To apply software engineering principles and practices for developing quality software for scientific and business applications.
        </p>
      </li>
      <li>
        <p style="text-decoration:underline">PSO3</p>
        <p class="conatiner content">
          To adapt to emerging Information and Communication Technologies (ICT) to innovate ideas and solutions to existing/novel problems.
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