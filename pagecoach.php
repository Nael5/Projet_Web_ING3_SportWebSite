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
            <li class="navi1"><a href="#">Mes rendez-vous</a></li>
            <li class="navi1"><a href="votrecomptecoach.php">Votre Compte</a></li>

    </div>
    <div id="c2">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-white bg-dark"
                placeholder="Search..." aria-label="Search">
                <br><br><br><br><br>
        </form>
    </div>    
</div>