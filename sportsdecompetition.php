<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  margin-top: 1%;
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
    min-height: 100px;
  }
#c2{
        float: right;
        width: 25%;
        margin-top: 0.5%;
}
}
body {
    font-family: 'Open Sans', sans-serif;
}
.carroosel{
    width: 100%;
    height: 50%;
    float: left;
    padding-top: 10%;
    margin-bottom: 10%;
}
.container {
    position: absolute;
    height: 50%;
    width: 100%;
    left: calc(50% - 450px);
    display: flex;
}

.card {
    display: flex;
    height: 280px;
    width: 200px;
    background-color: #17141d;
    border-radius: 10px;
    box-shadow: -1rem 0 3rem #000;
    /*   margin-left: -50px; */
    transition: 0.4s ease-out;
    position: relative;
    left: 0px;
}

.card:not(:first-child) {
    margin-left: -50px;
}

.card:hover {
    transform: translateY(-20px);
    transition: 0.4s ease-out;
}

.card:hover ~ .card {
    position: relative;
    left: 50px;
    transition: 0.4s ease-out;
}

.title {
    color: white;
    font-weight: 300;
    position: absolute;
    left: 20px;
    top: 15px;
}

.bar {
    position: absolute;
    top: 70px;
    left: 20px;
    height: 5px;
    width: 120px;
}

.emptybar {
    background-color: #2e3033;
    width: 100%;
    height: 100%;
}

.filledbar {
    position: absolute;
    top: 0px;
    z-index: 3;
    width: 0px;
    height: 100%;
    background: rgb(0,154,217);
    background: linear-gradient(90deg, rgba(0,154,217,1) 0%, rgba(217,147,0,1) 65%, rgba(255,186,0,1) 100%);
    transition: 0.6s ease-out;
}

.card:hover .filledbar {
    width: 120px;
    transition: 0.4s ease-out;
}

.circle {
    position: absolute;
    top: 100px;
    left: calc(50% - 90px);
}

.stroke {
    stroke: white;
    stroke-dasharray: 360;
    stroke-dashoffset: 360;
    transition: 0.6s ease-out;
}

svg {
    fill: #17141d;
    stroke-width: 2px;
}

.card:hover .stroke {
    stroke-dashoffset: 100;
    transition: 0.6s ease-out;
}
.clique{
    margin-top: 5%;
    margin-left: 5%;
}
.clique2{
    margin-top: 9%;
    margin-left: 5%;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#equipe" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> L'équipe Omnes Sport</a>
    <a href="#service" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Nos Services</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Contact</a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="Notifications">Connexion <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
        <a href="connexionadmin.php" class="w3-bar-item w3-button">Administrateur</a>
        <a href="connexionclient.php" class="w3-bar-item w3-button">Déjà Client</a>
        <a href="creation_client.html" class="w3-bar-item w3-button">Nouveau Client</a>
        <a href="connexioncoach.php" class="w3-bar-item w3-button">Coach</a>
      </div>
    </div>
    </a>  
  <div id="c2">
    <form action = "recherche.php" method="post">
            <td><input type="text " name="specialite" placeholder="Recherche..." aria-label="Search" class="form-control form-control-dark text-white bg-dark"></td>
            <input type="submit" name="button1" value="Rechercher" hidden>
            <tr>      
        </table>    
    </form>
  </div>   
  </div>
</div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#equipe" class="w3-bar-item w3-button" onclick="toggleFunction()">L'équipe Omnes Sport</a>
    <a href="#service" class="w3-bar-item w3-button" onclick="toggleFunction()">Nos services</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
    <a href="#recherche" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
  </div>
</div>
<center>
<img src="image/logo.png" width="20%">
</center>
<!-- Container (About Section) -->
<div class="carroosel">
            <div class="container">
                <div class="card">
                    <h3 class="title">Basketball</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="circle">
                            <img src="https://www.coach-elite.fr/wp-content/uploads/2021/09/Blog-2.jpg" alt="basketball" width="70%" height="100%" />
                            
                            <div class="clique2"> 
                                <a href="basketball.php">Plus d'information</a>
                            </div>
                            
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        </svg>
                        
                    </div>
                    
                </div>
                <div class="card">
                    <h3 class="title">Football</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="circle">
                    <img src="https://www.leparisien.fr/resizer/ZhKwFS9EIdQSSrZCW-SNc1reAPo=/1248x782/cloudfront-eu-central-1.images.arcpublishing.com/leparisien/YQ633PGPXZDW3BLG4P7TZLK4H4.jpg" alt="football" width="60%" height="60%" />
                        
                            <div class="clique"> 
                                <a href="football.php">Plus d'information</a>
                            </div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        </svg>
                    </div>
                </div>
                <div class="card">
                    <h3 class="title">Rugby</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="circle">
                    <img src="https://www.capital.fr/imgre/fit/https.3A.2F.2Fi.2Epmdstatic.2Enet.2Fcap.2F2021.2F03.2F03.2F0085cfdf-abfd-407e-80c6-49c78df5f55e.2Ejpeg/790x395/background-color/ffffff/quality/10/canal-rafle-tous-les-droits-du-rugby.jpg" alt="football" width="70%" height="100%" />
                            <div class="clique2"> 
                                <a href="tennis.php">Plus d'information</a>
                            </div>
                        
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        </svg>
                    </div>
                </div>
                <div class="card">
                    <h3 class="title">Tennis</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="circle">
                    <img src="https://www.lequipe.fr/_medias/img-photo-jpg/stanislas-wawrinka-en-action-g-mangiapane-reuters/1500000001640282/0:0,1998:1332-828-552-75/9a43a.jpg" alt="tennis" width="60%" height="60%" />
                            <div class="clique"> 
                                <a href="tennis.php">Plus d'information</a>
                            </div>
                        
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        </svg>
                    </div>
                </div>
                <div class="card">
                    <h3 class="title">Natation</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="circle">
                    <img src="https://img.passeportsante.net/1200x675/2021-05-06/i106189-natation-activite-physique-multiples-bienfaits.jpg" alt="natation" width="70%" height="100%" />
                            <div class="clique"> 
                                <a href="natation.php">Plus d'information</a>
                            </div>
                    
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        </svg>
                    </div>
                </div>
                <div class="card">
                    <h3 class="title">Plongeon</h3>
                    <div class="bar">
                        <div class="emptybar"></div>
                        <div class="filledbar"></div>
                    </div>
                    <div class="circle">
                    <img src="https://www.guide-piscine.fr/medias/image/le-plongeon-canard-13875-1200-800.jpg" alt="plongeon" width="60%" height="60%" />
                            
                            <div class="clique"> 
                                <a href="plongeon.php">Plus d'information</a>
                            </div>
                    
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        </svg>
                    </div>
                </div>
            </div>
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
        
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.621436105639!2d2.2950236!3d48.846359199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e670176efe3519%3A0xb1c18fce0af0dbef!2s111%20Rue%20du%20Th%C3%A9%C3%A2tre%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653314559474!5m2!1sfr!2sfr%22%3E"> 111 rue du théâtre, Paris 15ème</a><br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="tel : +33 141107654?subject=HTML link"> +33 141107654</a><br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="mailto:salome.carville@edu.ece.fr?subject=HTML link">service@omnes.sport</a><br>
        <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="https://www.instagram.com/%22%3Eomnessport">omnessport</a></a></a><br>

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

</body>
</html>


<div><h1 class="titre">Nos Services</h1></div>
<div class="navigation">
<br>
    <div>
        <ul class="nav nav-pills">
            <li class="na1"><a href="personnelssalle.html">Personnels de la salle de sport</a></li>
            <li class="na2"><a href="horairegym.html">Horaire de la gym</a></li>
            <li class="na3"><a href="regles.html">Règles sur l'utilisation des machines</a></li>
            <li class="na4"><a href="nouvclient.html">Nouveaux clients</a></li>
            <li class="na5"><a href="Alimentation.html">Alimentation et nutrition</a></li>
            <li class="na6"><a href="Gyneco.html">Gynécologie</a></li>
        
        </ul>
    </div>
</div>

<div class="text">
        <center>
        <img src="image/Bonhomme.jpg" alt="logo" width="25%" height="25%">
        </center>
    </div>
</div>
