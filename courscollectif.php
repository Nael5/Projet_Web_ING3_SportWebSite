<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3d Card Effect</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="carte.css">
    
    </head>
<body>


<?php
//identifier le nom de base de données
 $database = "omnes_sport";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">';
echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
';

$mysqli = new mysqli("localhost", "root", "", "omnes_sport");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
     $sql = "SELECT * FROM coach WHERE specialite='cours collectif'";
     if($result = $mysqli->query($sql)){
         if($result->num_rows > 0 ){
            while ($data = mysqli_fetch_assoc($result)) {

                echo ' <div class="container">
                <center>
                    <div class="card">
                        <div class="sneaker">
                            <div class="circle2">
                                <img src="'.$data["photo_chemin"].'" class="card-img-top" alt="..." style= "width:87%" height="135" ; 
                            </div>
                        
                                <div class="info">
                                    <h1 class="title"> '.$data["prenom"]. ' '. $data['nom'].', Coach de '.$data["specialite"].  '</h1>   
                                        <h2 class="sous-titre"> Bureau : '.$data['bureau'].'<br>Téléphone : '.$data['tel']. '<br>Email : '.$data['mail'].'<br>Tarif : '.$data['tarif']. '€</h2>
                                                <div class="purchase">
                                                    <button>Rendez-Vous</button>
                                                    <button><a href="chat.php">Communiquer</a></li>
                                                    <button><a href="cvleo.php">Voir le CV </button>
                                                </div>
                                
                            </div>
                        </div>    
                    </div>
                    </center>
                </div>';
            }//end while
        }
    }    
//si le BDD n'existe pasl
//fermer la connection
$mysqli->close();
?>