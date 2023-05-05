<?php
session_start();
if(isset($_POST['username']) && isset($_POST['username2'])&& isset($_POST['username3']))
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
    $username2 = mysqli_real_escape_string($db,htmlspecialchars($_POST['username2'])); 
    $username3 = mysqli_real_escape_string($db,htmlspecialchars($_POST['username3'])); 
    
    if($username !== "" && $username2 !== "" && $username3 !== "")
    {
        $requete = "SELECT count(*) FROM admin WHERE 
              nom = '".$username."' and prenom = '".$username2."' and mail ='".$username3."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principaladmin.php');
        }
        else
        {
         echo "Echec de connexion ! Information incorrecte. <br> Veuillez recommencer";
         header("refresh:2;url=connexionadmin.php");
      }
    }
    else
    {
      echo "Echec de connexion! Information incorrecte.. <br> Veuillez recommencer";
      header("refresh:2;url=connexionadmin.php");
        // utilisateur ou mot de passe vide
      }
}
else
{
   header('Location: connexionadmin.php');
}
mysqli_close($db); // fermer la connexion
?>