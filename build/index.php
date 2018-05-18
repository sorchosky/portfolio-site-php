<!DOCTYPE html>
<html>
  <!-- Include head -->
  <?php include 'partial/head.php'; ?>

<body>

<?php include 'partial/google-analytics.php'; ?>

<!-- Header -->
<?php include 'partial/navigation.php'; ?>

<div class="wrapper">

  <!-- Intro -->
  <section id="intro">
    <h1 class="homepage">I’m Steve Orchosky, and I am a digital designer and illustrator.</h1>

    <!-- <div class="animation">
      <img src="img/homepage.jpg" alt="Homepage illustration">
    </div> -->

    <a class="continue" id="continueButton">
      <h5 class="continue__text">Continue</h5>
      <img class="continue__arrow" src="img/SVG/scroll_arrow.svg" srcset="img/2x/scroll_arrow@2x.png 1x, img/SVG/scroll_arrow.svg 2x" alt="down-arrow">
    </a>
  </section>

  <!-- Works section anchor for continue btn -->
  <section id="works">

    <article class="feature feature-tempur-pedic-landing-pages">
      <!-- Img for mobile -->
      <div class="feature-img-container">
        <img src="img/2x/tempur-pedic-feature@2x.jpg" srcset="img/1x/tempur-pedic-feature.jpg 1x, img/2x/tempur-pedic-feature@2x.jpg 2x" alt="Tempur-Pedic Landing Pages">
      </div>

      <!-- Desktop gradient bg -->
      <div class="gradient">
        <div class="feature-text">
          <h3 class="feature-text-heading">Tempur-Pedic Retailer Landing Pages</h3>
          <p class="feature-text-paragraph">Website template design and development for <span class="no-break">Tempur-Pedic</span>, a client of Icon Marketing Communications.</p>
          <p class="btn-text">View Project</p> 
        </div>
      </div>

    </article>

  <!-- Non-feature projects grid -->
    <article class="project">
      <a href="biltmore_forest.php">
        <img src="img/biltmore-forest/144ppi/biltmore-forest-thumb.jpg" alt="Biltmore Forest Country Club Golf Course">
        <div class="text">
          <h3>Biltmore Forest Country Club</h3>
          <p>Website design for Biltmore Forest Country Club, a client of Clubessential.</p>
          <p class="btn-text">View Project</p> 
        </div>
      </a>
    </article>

    <article class="project">
      <a href="release.php">
        <img src="img/release/release_thumb.jpg" alt="Release App">
        <div class="text">
          <h3>Release</h3>
          <p>App design for HackOTR 2015, sponsored by the Brandery.</p>
          <p class="btn-text">View Project</p>
        </div>
      </a>
    </article>

  </section>

<!-- Footer -->
<?php include "partial/footer.php"; ?>

<!-- Close wrapper -->
</div>

<!-- Footer -->
<?php include "partial/script-links.php"; ?>

</body>
</html>
