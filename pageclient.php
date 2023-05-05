<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Projet Web</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 300px;
  }
}

</style>

<script type="text/javascript">
 $(document).ready(function () {
    var $carrousel = $('#carrousel'); 
    $img = $('#carrousel img'); 
    indexImg = $img.length - 1; 
    i = 0; 
    $currentImg = $img.eq(i);
    $img.css('display', 'none'); 
    $currentImg.css('display', 'block');
    function slideImg() {
         setTimeout(function () { 
            if (i < indexImg) { 
                i++; 
            } else { 
             i = 0;
            }
    $img.css('display', 'none');
    $currentImg = $img.eq(i);
    $currentImg.css('display', 'block');
    slideImg(); 
    }, 4000); 
}
    slideImg(); 
});
</script>

</head>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#service" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Nos Services</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Contact</a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="Notifications">Nos activités <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
        <a href="activitesportif.php" class="w3-bar-item w3-button">Activitée Sportive</a>
        <a href="sportsdecompetition.php" class="w3-bar-item w3-button">Sport de Compétition</a>

      </div>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#equipe" class="w3-bar-item w3-button" onclick="toggleFunction()">L'équipe Omnes Sport</a>
    <a href="#service" class="w3-bar-item w3-button" onclick="toggleFunction()">Nos services</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <img src="image/logo.png">
  </div>
</div>


<div id="carrousel">
    <ul>
        <center>
        <img src="image/muscu.jpg" width=50% height=50% />
        <img src="image/gym.jpg" width=50% height=50% />
        <img src="image/sport.jpg" width=50% height=50% />
        </center>
    </ul>

</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Où nous trouver ?</h3>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.621436105639!2d2.2950236!3d48.846359199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e670176efe3519%3A0xb1c18fce0af0dbef!2s111%20Rue%20du%20Th%C3%A9%C3%A2tre%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653314559474!5m2!1sfr!2sfr" 
      width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </iframe>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.621436105639!2d2.2950236!3d48.846359199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e670176efe3519%3A0xb1c18fce0af0dbef!2s111%20Rue%20du%20Th%C3%A9%C3%A2tre%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653314559474!5m2!1sfr!2sfr"> 111 rue du théâtre, Paris 15ème</a><br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="tel : +33 141107654?subject=HTML link"> +33 141107654</a><br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="mailto:service@omnes.sport?subject=HTML link">service@omnes.sport</a> <br>
        <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="https://www.instagram.com/">omnessport</a><br>

      </div>
      <p>En cas de question, envoyez nous un message </i></p>
      <form action="mail.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Nom" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> Envoyer
        </button>
      </form>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>
 
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


</div>
</html>

