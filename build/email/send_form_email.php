<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "steve@steveorchosky.com";
    $email_subject = "New message from steveorchosky.com";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width">
    <title>Success!</title>
    <meta name="robots" content="noindex" />
    <link rel="icon" href="../favicon.ico">
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60017587-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="../css/typography.css">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.css" type="text/css" rel="stylesheet" />

    <!-- Components -->
    <link rel="stylesheet" href="../css/components/typography.css">
    <link rel="stylesheet" href="../css/components/buttons.css">

    <!-- Layout -->
    <link rel="stylesheet" href="../css/layout/all.css">
    <link rel="stylesheet" href="../css/layout/tablet.css" media="all and (min-width:768px)">
    <link rel="stylesheet" href="../css/layout/desktop.css" media="all and (min-width:1080px)">
    <link rel="stylesheet" href="../css/layout/large-desktop.css" media="all and (min-width:1440px)">

    <!-- Page -->
    <link rel="stylesheet" href="../css/pages/email_success.css">

    <!-- Script -->
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/detect_swipe/2.1.1/jquery.detect_swipe.min.js"></script>

  </head>
<body>

<div class="wrapper">
  <!-- Header -->
  <nav>
    <a href="http://steveorchosky.com" class="logo">
      <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
      <svg version="1.1"
      	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
      	 x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
      <defs>
      </defs>
      <g>
      	<g>
      		<g>
      			<path d="M17.5,5.4c0,1.2,0.6,2.3,1.6,3c0.5,0.3,1.1,0.6,1.7,0.6c0.3,0,1.7,0.1,1.2-0.6c-0.1-0.2-0.3-0.4-0.4-0.6
      				c-0.8-0.8-1.6-1.5-2.5-2.2c-0.4-0.2-0.7-0.4-1.1-0.6C17.8,4.9,17.5,5.1,17.5,5.4C17.5,5.4,17.5,5.4,17.5,5.4z"/>
      		</g>
      		<g>
      			<path d="M10.6,22.2c0-2.1-1.8-3.8-3.9-3.6l-0.2,0c-0.3,0-0.5,0.4-0.3,0.7c0.2,0.4,0.5,0.7,0.8,1
      				c0.8,0.8,1.7,1.5,2.7,2.1c0.1,0.1,0.2,0.1,0.3,0.2C10.2,22.7,10.6,22.5,10.6,22.2C10.6,22.2,10.6,22.2,10.6,22.2L10.6,22.2z"/>
      		</g>
      		<g>
      			<path d="M21.5,14.2c-0.8-0.6-1.6-1.1-2.3-1.4c-0.7-0.3-1.6-0.7-2.5-1c-0.9-0.3-1.8-0.6-2.7-0.9
      				c-0.8-0.3-1.5-0.6-1.9-1.1c-0.6-0.6-1-1.4-1-2.2c0-1.2,0.4-2,1.1-2.6c0.4-0.3,0.8-0.5,1.2-0.6c0.1,0,0.1-0.3,0-0.2
      				C11.2,4.4,8.9,5.4,7.3,7c-1,1-1.4,2.4-0.9,3.8c0.4,1.2,1,2.1,2,2.8c0.8,0.6,1.6,1,2.4,1.4c0.8,0.3,1.8,0.7,3,1
      				c1.2,0.3,2.2,0.7,2.9,1c1.4,0.6,2.1,1.6,2.1,3c0,1.2-0.3,2.1-1,2.7c-0.1,0.1,0,0.3,0.2,0.3c1.9-0.8,3.4-2.1,4.5-3.8
      				C23.4,17.5,23,15.4,21.5,14.2C21.5,14.3,21.5,14.2,21.5,14.2z"/>
      		</g>
      	</g>
      	<g>
      		<path d="M14,28C6.3,28,0,21.7,0,14S6.3,0,14,0s14,6.3,14,14S21.7,28,14,28z M14,2.1C7.4,2.1,2.1,7.4,2.1,14
      			c0,6.6,5.3,11.9,11.9,11.9S25.9,20.6,25.9,14C25.9,7.4,20.6,2.1,14,2.1z"/>
      	</g>
      </g>
      </svg>
    </a>
    <ul>
      <li><a href="../about.html">About</a></li>
      <li><a href="../illustration.html">Illustration</a></li>
    </ul>
  </nav>


  <!-- Message -->
  <section id="intro">
    <h1><span>Success!</span> I’ll get back to you soon</h1>
    <h3>In the meantime, take a look at my <a href="index.html">design work</a>, learn <a href="about.html">about me</a>, or check out my <a href="illustration.html">illustration.</a></h3>
  </section>








  <!-- Contact -->


<!-- Footer -->
<footer>
  <a href="http://steveorchosky.com" class="logo">
    <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
    <svg version="1.1"
       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
       x="0px" y="0px" height="4.8em" viewBox="0 0 33 33" style="enable-background:new 0 0 33 33;" xml:space="preserve">
    <g>
      <g>
        <g>
          <g>
            <path d="M20.6,6.3c0,1.4,0.8,2.8,1.9,3.5c0.6,0.4,1.3,0.7,2,0.7c0.4,0,2,0.1,1.5-0.8c-0.2-0.2-0.3-0.5-0.5-0.7
              c-0.9-1-1.9-1.8-2.9-2.6c-0.4-0.3-0.9-0.5-1.3-0.7C21,5.7,20.6,6,20.6,6.3C20.6,6.3,20.6,6.3,20.6,6.3z"/>
          </g>
        </g>
        <g>
          <g>
            <path d="M12.4,26.1c0-2.5-2.1-4.4-4.6-4.3l-0.3,0c-0.4,0-0.6,0.5-0.4,0.8c0.3,0.4,0.6,0.8,0.9,1.2
              c1,0.9,2,1.8,3.2,2.5c0.1,0.1,0.2,0.1,0.4,0.2C12,26.8,12.4,26.5,12.4,26.1L12.4,26.1L12.4,26.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path d="M25.3,16.8c-0.9-0.7-1.8-1.3-2.7-1.7c-0.9-0.4-1.9-0.8-3-1.1c-1.1-0.3-2.2-0.7-3.2-1
              c-1-0.3-1.7-0.7-2.2-1.2c-0.8-0.8-1.1-1.6-1.1-2.6c0-1.4,0.4-2.4,1.3-3.1c0.4-0.3,0.9-0.5,1.5-0.7C16,5.2,16,5,15.8,5
              c-2.7,0.2-5.3,1.4-7.2,3.3C7.5,9.4,7,11.1,7.5,12.7C8,14,8.7,15.1,9.9,16c0.9,0.7,1.9,1.2,2.8,1.6c0.9,0.4,2.1,0.8,3.5,1.2
              c1.4,0.4,2.5,0.8,3.4,1.2c1.7,0.8,2.5,1.9,2.5,3.5c0,1.4-0.4,2.4-1.2,3.2c-0.2,0.2,0,0.4,0.2,0.3c2.2-0.9,4-2.5,5.2-4.5
              C27.5,20.6,27.1,18.1,25.3,16.8C25.3,16.8,25.3,16.8,25.3,16.8z"/>
          </g>
        </g>
      </g>
      <g>
        <g>
          <path d="M16.5,33C7.4,33,0,25.6,0,16.5S7.4,0,16.5,0S33,7.4,33,16.5S25.6,33,16.5,33z M16.5,2.5c-7.7,0-14,6.3-14,14
            c0,7.7,6.3,14,14,14s14-6.3,14-14C30.5,8.7,24.2,2.5,16.5,2.5z"/>
        </g>
      </g>
    </g>
    </svg>
 
  </a>

  <div class="footer-right">
    <ul>
      <li><a href="about.html">About</a></li>
      <li><a href="illustration.html">Illustration</a></li>
    </ul>
    <h6>Copyright © 2017 Steve Orchosky. All Rights Reserved.</h6>
  </div>

</footer>

<!-- Close wrapper -->
</div>

<!-- Script external links -->
<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script type="text/javascript" src="script/script.js"></script>

</body>
</html>


<?php

}
?>
