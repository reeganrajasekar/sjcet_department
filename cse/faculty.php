<?php require("./layout/Header.php") ?>
<main class="mt-2">
  <section class="container pt-4 pb-4">
    <h1 class="heading">Faculty</h1>
    <div class="row pt-2">
      <?php
      $sql = "SELECT * FROM staff WHERE NOT place='1' AND dept='".$department."' order by place ASC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
      ?>
      <div class="col-sm-12 col-md-12 col-lg-3 text-center "  data-aos="fade-up" data-aos-once="true">
        <a href="/static/uploads/staff/<?php echo $row['pdf']?>" target="blank" style="text-decoration:none">
          <img src="/static/uploads/staff/image/<?php echo $row['pic']?>" loading="lazy" class="staff" alt="">
          <p class="text-muted pt-2">
            <span style="color:#444;"><?php echo $row['name']?></span>
            <br>
            <?php echo $row['position']?>
            <br>
            <?php echo $row['email']?>

          </p>
        </a>
      </div>
      <?php }} ?>
    </div>
  </section>
</main>
<?php require("./layout/Footer.php") ?>