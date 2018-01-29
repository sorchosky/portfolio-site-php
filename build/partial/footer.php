  <!-- Contact -->
  <section>
    <h2 style="max-width: 60em; margin-bottom: 1em;">Follow my work or contact me below.</h2>

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
    <form class="contact-form" name="contactform" method="post" action="email/send_form_email.php">
      <div>
        <label for="first_name">First Name *</label><br /><br />
        <input type="text" class="text-field" name="first_name" maxlength="50">
      </div>
      <div>
        <label for="last_name">Last Name *</label><br /><br />
        <input type="text" class="text-field" name="last_name" maxlength="50">
      </div>
      <div>
        <label for="email">Email Address *</label><br /><br />
        <input type="text" class="text-field" name="email" maxlength="80">
      </div>
      <div>
        <label for="telephone">Telephone Number</label><br /><br />
        <input type="text" class="text-field" name="telephone" maxlength="30">
      </div>
      <div class="comments">
        <label for="comments">Comments *</label><br /><br />
        <textarea name="comments" maxlength="1000" rows="6"></textarea>
      </div>

      <input class="btn" type="submit" value="Send to Steve">

    </form>

  </section>

  <!-- Footer -->
  <footer>
    <a href="index.php" class="logo <?php if ($current == 'home') {echo 'current';}?>">
      <?php include 'logo.php' ?>
    </a>

    <div class="footer-right">
      <ul>
        <li <?php if ($current == 'About') {echo 'class="current"';}?>><a href="about.php">About</a></li>
        <li <?php if ($current == 'Illustration') {echo 'class="current"';}?>><a href="illustration.php">Illustration</a></li>
      </ul>
      <h6>Copyright © <?php echo date("Y"); ?> Steve Orchosky. All Rights Reserved.</h6>
    </div>

  </footer>

<!-- Close wrapper -->
</div>

<!-- Script external links -->
<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

  </body>
</html>
