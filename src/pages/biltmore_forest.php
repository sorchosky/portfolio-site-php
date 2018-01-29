<?php 
$current = 'Biltmore';
include 'partial/header.php' 
?>

  <!-- Intro -->
  <section class="works-intro">
    <h1>Biltmore Forest Country Club website design</h1>
    <div class="two-col-layout">
      <div class="main">
        <h2>Modern Tradition</h2>
        <p>
          The Biltmore Forest Country Club web redesign required a balance between a clean &amp; contemporary layout while preserving the tradition of the club. Membership is very exclusive, so we had to advertise minimal content on the public facing site &amp; emphasize member engagement as much as possible. Lastly, we were challenged with establishing digital branding standards such as web display of logo, font usage, and color palette.
        </p>
        <h5>
          *Image and video Media provided by client.
        </h5>
      </div>
      <div class="sidebar">
        <ul>
          <li>
            <h4>Role</h4>
            <p>Design Lead</p>
          </li>
          <li>
            <h4>Company</h4>
            <p>Clubessential</p>
          </li>
          <li>
            <h4>Date</h4>
            <p>FEB 2016</p>
          </li>
          <li>
            <h4>Credits</h4>
            <p>Alex Hendy</p>
            <h5>Project Manager</h5>
            <p>Roger Hodge</p>
            <h5>Front End Developer</h5>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div class="approved-design biltmore-forest-bg-image">
    <section class="approved-design-section">
      <h2>Approved Design</h2>
      <div>
        <img src="img/biltmore-forest/72ppi/biltmore_forest_approved_design.png" srcset="img/biltmore-forest/72ppi/biltmore_forest_approved_design.png x1, img/biltmore-forest/144ppi/biltmore_forest_approved_design.png x2" class="web-shadow approved-design-img" alt="">
      </div>
    </section>
  </div>

<!--   <section>
    <h2>Additional Pages</h2>
    <div class="fifty-fifty">
    </div>
  </section> -->

  <section>
    <img src="img/biltmore-forest/72ppi/biltmore_forest_ui.png" srcset="img/biltmore-forest/72ppi/biltmore_forest_ui.png x1, img/biltmore-forest/144ppi/biltmore_forest_ui.png x2" class="responsive" alt="Ravenna UI components">
  </section>

  <!-- Contact -->
  <section>
    <h2 style="max-width: 60em; margin-bottom: 1em;">Like what you see?<br>Follow my work or contact me below.</h2>

    <!-- Social Media -->
    <ul class="social-icons">
      <li>
        <a href="https://www.instagram.com/sorchosky/?hl=en"><i class="fa fa-instagram"></i></a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/steve-orchosky"><i class="fa fa-linkedin"></i></a>
      </li>
      <li>
        <a href="https://dribbble.com/sorchosky"><i class="fa fa-dribbble"></i></a>
      </li>
      <li>
        <a href="https://twitter.com/sorchosky"><i class="fa fa-twitter"></i></a>
      </li>
    </ul>

    <!-- Contact Form -->
    <form id="Contact" class="contact-form" name="contactform" method="post" action="email/send_form_email.php">
      <div>
        <label for="first_name">First Name *</label><br />
        <input type="text" class="text-field" name="first_name" maxlength="50">
      </div>
      <div>
        <label for="last_name">Last Name *</label><br />
        <input type="text" class="text-field" name="last_name" maxlength="50">
      </div>
      <div>
        <label for="email">Email Address *</label><br />
        <input type="text" class="text-field" name="email" maxlength="80">
      </div>
      <div>
        <label for="telephone">Telephone Number</label><br />
        <input type="text" class="text-field" name="telephone" maxlength="30">
      </div>
      <div class="comments">
        <label for="comments">Comments *</label><br />
        <textarea name="comments" maxlength="1000" rows="6"></textarea>
      </div>

      <input class="btn" type="submit" value="Send to Steve">

    </form>

  </section>

<?php include 'partial/footer.php' ?>