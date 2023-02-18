<?php require("./layout/Header.php") ?>

<main class="container mt-2">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-4">
      <section class="container pt-4" style="width:100% !important;">
      <h2 class="heading">Staff Achievements</h2>
        <ul  data-aos="fade-up" data-aos-once="true">
          <?php
          $sql = "SELECT * FROM ac WHERE dept='".$department."' AND title='staff' order by ac_date DESC ,id DESC LIMIT 10";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
          ?>
          <li>
            <p style="color:#333 !important">
              <span class="text-muted" style="color:#C2001B !important">Name :</span><span style="font-weight:600"><?php echo $row["name"] ?></span><br>
              <span class="text-muted" style="color:#C2001B !important">Description :</span><?php echo $row["content"] ?><br>
              <span class="text-muted" style="color:#C2001B !important">Date :</span>
              <script>
                document.write(moment("<?php echo($row["ac_date"])?>").format('ll'))
              </script>
            </p>
          </li>
          <?php }} ?>
        </ul>
      </section>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-4">
      <section class="container pt-4" style="width:100% !important;">
      <h2 class="heading">Student Achievements</h2>
        <ul  data-aos="fade-up" data-aos-once="true">
          <?php
          $sql = "SELECT * FROM ac WHERE dept='".$department."' AND title='student' order by ac_date DESC ,id DESC LIMIT 10";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
          ?>
          <li>
            <p style="color:#333 !important">
              <span class="text-muted" style="color:#C2001B !important">Name :</span><span style="font-weight:600"><?php echo $row["name"] ?></span><br>
              <span class="text-muted" style="color:#C2001B !important">Description :</span><?php echo $row["content"] ?><br>
              <span class="text-muted" style="color:#C2001B !important">Date :</span>
              <script>
                document.write(moment("<?php echo($row["ac_date"])?>").format('ll'))
              </script>
            </p>
          </li>
          <?php }} ?>
        </ul>
      </section>
    </div>

   
    <div class="col-sm-12 col-md-12 col-lg-4">
        <section class="container pt-4" style="width:100% !important;">
          <h1 class="heading">MoUs</h1>
          <article class="container pt-2">
            <ul >
              <?php
              $sql = "SELECT * FROM mou WHERE dept='".$department."' order by mou_year DESC , id DESC LIMIT 10";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
              ?>
              <a  href="/static/uploads/mou/<?php echo $row['pdf']?>" style="text-decoration:none;color:#000" target="blank">
                <li  data-aos="fade-up" data-aos-once="true" class="mb-2">
                  <p style="color:#333 !important">
                    <span class="text-muted" style="color:#C2001B !important">Company Name :</span><span style="font-weight:600"><?php echo $row['name']?></span><br>
                    <span class="text-muted" style="color:#C2001B !important">Details :</span><?php echo $row['content']?><br>
                    <span class="text-muted" style="color:#C2001B !important">Year :</span><?php echo $row['mou_year']?>
                  </p>
                </li>
              </a>
              <?php }} ?>
            </ul>
          </article>
        </section>
      </div>
    </div>
</main>
<?php require("./layout/Footer.php") ?>