<?php require_once "includes/header.php"; ?>

  <div class="about-foto">
    <div class="about-me">
      <h2 id="begroeting"></h2>
      <p>Hey mijn naam is Vinay.
        (VGD)- web developer
      </p>
    </div>
    <div class="foto-me">
      <img id="img-me" src="images/new-vgd-img.jpg" alt="me">
    </div>
  </div>
  <div id="cookiePopup" class="cookie-popup">
    <p>Deze website gebruikt cookies om ervoor te zorgen dat je de beste ervaring op onze website krijgt. <a href="more-info">meer informatie</a></p>
    <button id="acceptcookies">Accepteren</button>
    <button id="weiger-acceptcookies">weiger</button>
  </div>
  <script>
    window.onload = function(){
      const cookiePopup = document.getElementById('cookie-popup');
      const acceptCookiesButton = document.getElementById('accept-cookies');
    }    
  </script>
  <script>
    document.getElementById('acceptcookies').addEventListener('click', function() {
        document.getElementById('cookiePopup').style.display = 'none';
    });
  document.getElementById('weiger-acceptcookies').addEventListener('click', function() {
      document.getElementById('cookiePopup').style.display = 'none';
   });
   
  </script>
  
  <script>
    
    function tijdgebondenbegroeting(){
      const nu = new Date();
      const uur = nu.getHours();
      let begroeting;

      if (uur < 12) {
        begroeting = "Goedemorgen";
    } else if (uur < 18) {
      begroeting = "Goedemiddag";
      } else {
        begroeting = "Goedenavond";
        }

        document.getElementById("begroeting").innerText=begroeting;
      }

      window.onload = function(){
        tijdgebondenbegroeting();
      }
  </script>
  <script>
    
    function toggleMenu() {
      
      document.getElementById("mobile-nav").classList.toggle("show-mobile-nav");
    }
  </script>
  
  <script src="main.js"></script>
</body>
</html>