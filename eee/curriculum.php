<?php require("./layout/Header.php") ?>

<main class="mt-2">
  <section class="container pt-4">
  <h1 class="heading container">Curriculum</h1>
    <div class="container pt-4">
      <ul class="timeline">
        <?php
        $sql = "SELECT * FROM sub WHERE dept='".$department."' ORDER BY reg DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <li class="timeline-item mb-5"  data-aos="fade-up" data-aos-once="true">
          <h5 class="fw-bold" style="color:#C2001B;">Regulation - <?php echo $row['reg']?></h5>
          <div class="row text-muted gx-4 pt-3">
            <div class="col-sm-12 col-md-12 col-lg-4">
                  <a href="/static/uploads/reg/reg/<?php echo $row['reg_file']?>" target="blank" class="dept">Regulations</a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                  <a href="/static/uploads/reg/sy/<?php echo $row['sy_file']?>" target="blank" class="dept">Syllabus</a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                  <a href="/static/uploads/reg/oe/<?php echo $row['oe_file']?>" target="blank" class="dept">Open Electives</a>
            </div>
          </div>
        </li>
        <?php }} ?>
      </ul>
    </div>
  </section>
</main>
<?php require("./layout/Footer.php") ?>