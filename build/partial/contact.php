<!-- Contact Form -->
  <form id="Contact" class="contact-form" name="contactform" method="post" action="email/send_form_email.php">
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