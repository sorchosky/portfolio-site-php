<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width">
    <title>
      Steve Orchosky <?php if ($current !== 'home') {echo "| $current";}?>
    </title>
    <meta name="author" content="Steve Orchosky">
    <meta name="description" content="Digital Design and Illustration">
    <meta name="keywords" content="Steve Orchosky, steve orchosky resume, UC E-Media, Cincinnati designer, Cincinnati illustrator, graphic design resume, digital design portfolio, online design portfolio">
    <link rel="icon" href="favicon.ico">
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60017587-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MJ5FK2L');</script>
    <!-- End Google Tag Manager -->

    <!-- CSS Styles -->
    <link rel="stylesheet" href="main.css">

  </head>
  <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ5FK2L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div class="wrapper">
  <!-- Header -->
  <nav>
    <a href="index.php" class="logo <?php if ($current == 'home') {echo 'current';}?>">
      <?php include 'logo.php' ?>
    </a>

    <ul>
      <li <?php if ($current == 'About') {echo 'class="current"';}?>><a href="about.php">About</a></li>
      <li <?php if ($current == 'Illustration') {echo 'class="current"';}?>><a href="illustration.php">Illustration</a></li>
    </ul>
  </nav>