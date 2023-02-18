<?php require("./layout/Header.php") ?>

<main class="container-fluid mt-2">
<section class="container pt-4 pb-4" >
      <h1 class="heading">ABOUT THE DEPARTMENT</h1>
      <article class="container"  data-aos="fade-up" data-aos-once="true">
        <p class="content">
          &ensp;&ensp;The department was started during the academic year 2007-2008 with approval from AICTE and affiliation from Anna University Chennai to formulate proficient professionals to become part of the engineering and research association at the worldwide levels. Mechanical engineering deals with machinery design, fluid components production and manufacturing design and operation, therefore is a very interesting filed which keeps the interest of the students in place. The department provides placement opportunities in well-established organizations.
        </p>
        <p class="content">
          &ensp;&ensp;Our Department of mechanical engineering is committed to prepare graduates by providing them the best outcome based teaching-learning experience and scholarship enriched with professional ethics.
        </p>
        <div class="container">
          <div class="row gx-4">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
              <div class="vision">
                <img src="/static/images/vision.png" alt="vision">
                <h3>VISION</h3>
                <p style="text-align:justify !important;" class="container" >
                The Mechanical Engineering Department endeavors to be recognized globally for outstanding education and research leading to well qualified engineers, who are innovative, entrepreneurial and successful in advanced fields of mechanical engineering to cater the ever changing industrial demands and social needs.
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3"  data-aos="zoom-in" data-aos-once="true">
              <div class="vision">
                <img src="/static/images/mission.png" alt="mission">
                <h3>MISSION</h3>
                <p style="text-align:justify !important;" class="container" >
                To provide students the knowledge that builds within them, a strong foundation in the basic principles of mechanical engineering, problem solving abilities, analytical skills, soft skills and communication skills for their overall development for lifelong growth in their professional careers..
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
            &ensp;&ensp;It gives me immense pleasure to lead the Department of Mechanical Engineering. I am sure you will feel assured about the excellent infrastructure and academics. The Department of Mechanical Engineering was established in the year 2007. The department offers the B.E (Mechanical Engineering) with present intake of 120 students. The department has well equipped laboratories and we believes that our students are molded to become successful engineers, managers and future ethical leaders with required knowledge, analytical skills and creativity to develop innovative solutions to challenging problems who are not only committed to the industry but also to the society.
          <p>
          <p class="content">
            &ensp;&ensp;The students of the department will undergo internship in various reputed organizations all over the country. Students participate in various national and international level competitions regularly. The department possesses the state of the art research facilities to support our academic programs and research. Several projects of the students have been funded by the Government of Karnataka. The students of our department work in interdisciplinary projects and have won laurels at National level.
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
            Have a successful career in Mechanical Engineering and allied industries.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO2</p>
          <p class="conatiner content">
          Have expertise in the areas of Design, Thermal, Materials and Manufacturing.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO3</p>
          <p class="conatiner content">
          Contribute towards technological development through academic research and industrial practices.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO4</p>
          <p class="conatiner content">
          Practice their profession with good communication, leadership, ethics and social responsibility.
          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PEO5</p>
          <p class="conatiner content">
          Graduates will adapt to evolving technologies through life-long learning.
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
          To analyze, design and develop computing solutions by applying foundational concepts of Mechanical Engineering.          </p>
        </li>
        <li>
          <p style="text-decoration:underline">PSO2</p>
          <p class="conatiner content">
          To apply latest modelling and analysis techniques in the field of design and development.
          </p>

        </li>
        <li>
          <p style="text-decoration:underline">PSO3</p>
          <p class="conatiner content">
          To adapt to mechanical engineering concepts to innovate ideas and solutions to existing/novel problems.
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