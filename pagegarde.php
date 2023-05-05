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
<link href = "pagegarde.css" rel="stylesheet" type ="text/css"/>

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
<div class="wrapper">

<div class="header">
    <center>
    <img src="image/logo.png" alt="logo" width="30%" height="20%">
    </center>
</div>

<div class="navigation">
<br>
    <div id="c1">
        <ul class="nav nav-pills">
            <li class="navi1"><a href="accueil.html">Accueil</a></li>
            <li class="navi2"><a href="toutparcourir.html">Tout Parcourir</a></li>
            <li class="navi4"><a href="choixutilisateur.php" class="nav-link">Connexion</a></li>

        </ul>
    </div>
    <div id="c2">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-white bg-dark"
                placeholder="Search..." aria-label="Search">
                <br><br><br><br><br>
        </form>
    </div>    
</div>

<div id="carrousel">
    <ul>
        <center>
        <img src="image/muscu.jpg" width=70% height=70% />
        <img src="image/gym.jpg" width=70% height=70% />
        <img src="image/sport.jpg" width=70% height=70% />
        </center>
    </ul>

</div>


<div id="footer"> 
    <div id="footer1">
    L'équipe Omnes Sport &copy; Téléphone : 01 41 87 65 12 <br> omnes.sport@edu.ece.fr 
    </div>
    <div id="footer2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.621436105639!2d2.2950236!3d48.846359199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e670176efe3519%3A0xb1c18fce0af0dbef!2s111%20Rue%20du%20Th%C3%A9%C3%A2tre%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653314559474!5m2!1sfr!2sfr" width="70%" height="22%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </iframe>
    </div>
</div>

</div>
</html>


