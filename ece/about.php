<?php require("./layout/Header.php") ?>

<main class="container-fluid mt-2">
  <section class="container pt-4 pb-4" >
    <h1 class="heading">ABOUT THE DEPARTMENT</h1>
    <article class="container"  data-aos="fade-up" data-aos-once="true">
      <p class="content">
        &ensp;&ensp;Department of Electronics & Communication Engineering was established in the year 2007, 
        recognized by AICTE, New Delhi and affiliated to Anna University, Chennai with an intake of 90. 
        The main objective of the department is to prepare students as professional engineers through an 
        education in fundamental principles presented in the context of real application and design. 
        Technical workshops & seminars are being conducted regularly to give extra inputs to the students.
      </p>
      <div class="container">
        <div class="row gx-4">
          <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
            <div class="vision">
              <img src="/static/images/vision.png" alt="vision">
              <h3>VISION</h3>
              <p style="text-align:justify !important;" class="container" >
              To impart high quality education with unique teaching-learning process and to enable the students to face the challenges of the Electronics and Communication Engineering field.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
            <div class="vision">
              <img src="/static/images/mission.png" alt="mission">
              <h3>MISSION</h3>
              <p style="text-align:justify !important;" class="container" >
              To impart high quality education with unique teaching-learning process and to enable the 
              students to face the challenges of the Electronics and Communication Engineering field.
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
            &ensp;&ensp;Electronics and Communication Engineering deals with the electronic devices and 
            software applications. It is an interface of chip level hardware and information technology. 
            The primary focus of our department is to impart technical knowledge to students, promote their 
            problem solving and innovative skills in the growing technologies.
          <p>
          <p class="content">
            &ensp;&ensp;The department admires technology development through innovations and its exploitation 
            for the benefit of human kind. Department offers quality education through use of modern reaching 
            aids technique and to undertake research in engineering and technology. Students are also 
            encouraged to undergo supervised practical training in different industries so as to get hand 
            on experience and become employable technocrats.
                </p>
          <p class="content">
            &ensp;&ensp;Math is my Passion. Engineering is my Profession; ECE is the future mode of humans comfort.""
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
          To enable graduates to pursue research, or have a successful career in academia or industries associated with Electronics and Communication Engineering, or as entrepreneurs.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO1</p>
          <p class="conatiner content">
          To provide students with strong foundational concepts and also advanced techniques and tools in order to enable them to build solutions or systems of varying complexity.          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO1</p>
          <p class="conatiner content">
          To prepare students to critically analyze existing literature in an area of specialization and ethically develop innovative and research oriented methodologies to solve the problems identified.
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
          To analyze, design and develop solutions by applying foundational concepts of electronics and communication engineering.
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
          To adapt to emerging information and communication technologies (ICT) to innovate ideas and solutions to existing/novel problems.
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