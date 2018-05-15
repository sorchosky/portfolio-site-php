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
    <div class="animation"></div>
    <a class="continue" href="#works">
      <h5 class="continue__text">Continue</h5>
      <img class="continue__arrow" src="img/SVG/scroll_arrow.svg" srcset="img/2x/scroll_arrow@2x.png 1x, img/SVG/scroll_arrow.svg 2x" alt="down-arrow">
    </a>
  </section>

  <section id="works">
    <a href="tempur-pedic-landing-pages.php">
      <article class="feature feature-tempur-pedic-landing-pages">
        <div class="gradient">
          <div class="feature-text">
            <h3 class="feature-text-heading">Tempur-Pedic Retailer Landing Pages</h3>
            <p class="feature-text-paragraph">Website template design and development for Tempur-Pedic, a client of Icon Marketing Communications.</p>
            <p class="btn-text">View Project</p> 
          </div>
        </div>
      </article>
    </a> 
  </section>

  <section class="other_projects">

    <article class="project">
      <img srcset="img/biltmore-forest/72ppi/biltmore-forest-thumb.jpg x1, img/biltmore-forest/144ppi/biltmore-forest-thumb.jpg 2x" alt="Biltmore Forest Country Club Golf Course">
      <h3>Biltmore Forest Country Club</h3>
      <p>Website design for Biltmore Forest Country Club, a client of Clubessential.</p>
      <a href="biltmore_forest.php">View Project</a>
    </article>

    <article class="project">
      <img src="img/release/release_thumb.jpg" alt="Release App">
      <h3>Release</h3>
      <p>App design for HackOTR 2015, sponsored by the Brandery.</p>
      <a href="release.php">View Project</a>
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
