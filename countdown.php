<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
  <header>
    <img src="images/vdg.png-transparant.png" alt="vgd-animated">
    <h1 class="bolt-text"> countdown </h1>
</header>

<nav>
  <a class="effect" href="index.php">home</a>
  
</nav>
<div>
    <h2 class="time" id="countdown"></h2>
  </div>
    <script>
        var countdown_time= 1000
        function countdown() {
          
          countdown_time--;
          console.log(countdown_time)
          document.getElementById("countdown").innerText = countdown_time;
        }
        setInterval(countdown, 1000)
      </script>
</body>
</html>