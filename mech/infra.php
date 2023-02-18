<?php require("./layout/Header.php") ?>

<main class="mt-2">
  <section class="container pt-4 pb-4">
    <h1 class="heading">Infrastructure</h1>
    <article class="container pt-3">
      <div class="row">
        <?php
        $sql = "SELECT * FROM lab WHERE dept='".$department."' order by id DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-sm-12 col-md-3 col-lg-4 pb-4"  data-aos="fade-up" data-aos-once="true">
          <a href="/static/uploads/lab/<?php echo $row["pdf"]?>" target="blank"  style="color:gray;text-decoration:none !important;">
            <figure class="figure">
              <img loading="lazy" src="/static/uploads/lab/image/<?php echo $row["img"]?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
              <figcaption class="figure-caption text-center" style="font-size: 18px;"><?php echo $row["name"]?></figcaption>
            </figure>
          </a>
        </div>
        <?php }} ?>
      </div>
    </article>
  </section>
</main>

<?php require("./layout/Footer.php") ?>