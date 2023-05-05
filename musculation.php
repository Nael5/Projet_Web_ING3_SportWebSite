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
<script>
    function afficherCalendrier()
    {
        let dispos = document.getElementById("tab").value;
        for(let i=0; i<=12; i++)
        {
            let cellID = 'cell' + i;
            let one = document.getElementById(cellID);
            if(dispo[i-1]==1){
                one.style.backgroundColor = "rgb(36, 33, 33)";
            }
        }
    }

</script>

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
     $sql = "SELECT * FROM coach WHERE specialite='musculation'";
     if($result = $mysqli->query($sql)){
         if($result->num_rows > 0 ){
            while ($data = mysqli_fetch_assoc($result)) {

                echo ' <div class="container">
                <center>
                    <div class="card">
                        <div class="sneaker">
                            <div class="circle">
                                <img src="'.$data["photo_chemin"].'" class="card-img-top" alt="..." style= "width:87%";
                            </div>
                        
                                <div class="info">
                                    <h1 class="title"> '.$data["prenom"]. ' '. $data['nom'].', Coach de '.$data["specialite"].  '</h1>   
                                        <h2 class="sous-titre"> Bureau : '.$data['bureau'].'<br>Téléphone : '.$data['tel']. '<br>Email : '.$data['mail'].'<br>Tarif : '.$data['tarif']. '€ <br>Dispo : 
                                        
                                        



                                                <div class="purchase">
                                                    <button>Rendez-Vous</button>
                                                    <button class="open-button" onclick="openForm()">Communiquer</button>
                                                    <button><a href="cvantoine.php">Voir le CV </button>
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
<div class=""PP>
<div class="form-popup" id="myForm">
                        <form action="/action_page.php" class="form-container">
                            <h1>Login</h1>

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
    </div>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>
</body>
</html>
