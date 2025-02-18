<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="main.css">

  
    <title>portfolio VGD</title>
  </head>
<body id="body">
  <script>
    window.onload = function(){
      const cookiePopup = document.getElementById('cookie-popup');
      const acceptCookiesButton = document.getElementById('accept-cookies');
    }    
  </script>
  
  <header>
    <img src="images/vdg.png-transparant.png" alt="">
    <h1><?php echo  trim($_SERVER['REQUEST_URI'], '/portfolio,.php'); ?> </h1>

  </header>
  <button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button>
  <nav class="desktop-nav">
    <ul>
      <li><a href="#"></a></li>
      <li><a class="effect" href="about-me.php">about me</a></li>
      <li><a class="effect" href="my-projects.php">My projects</a></li>
      <li><a class="effect" href="interview.php">interview</a></li>
      <li><a class="effect" href="contact.php">Contact me</a></li>
      <button onclick="light_mode()">toggle light-mode</button>
    </ul>
  </nav>

  <nav class="mobile-nav" id="mobile-nav">
    <ul>
      <li><a href="#"></a></li>
      <li><a class="effect" href="about-me.php">about me</a></li>
      <li><a class="effect" href="my-projects.php">My projects</a></li>
      <li><a class="effect" href="interview.php">interview</a></li>
      <li><a class="effect" href="contact.php">Contact me</a></li>
      <button onclick="light_mode()">toggle light-mode</button>
    </ul>
  </nav>