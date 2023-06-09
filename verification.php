<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'omnes_sport';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM client WHERE 
              logine = '".$username."' and mdp = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
         echo "Echec de connexion ! Nom d'utilisateur ou mot de passe incorrect. <br> Veuillez recommencer";
         header("refresh:2;url=connexionclient.php");
      }
    }
    else
    {
      echo "Echec de connexion! Nom d'utilisateur ou mot de passe incorrect. <br> Veuillez recommencer";
      header("refresh:2;url=connexionclient.php");
        // utilisateur ou mot de passe vide
      }
}
else
{
   header('Location: connexionclient.php');
}
mysqli_close($db); // fermer la connexion
?>
