<?php
session_start();
if(isset($_POST['type']) && isset($_POST['num']) && isset($_POST['nomcarte']) && isset($_POST['securite']) && isset($_POST['exp']))
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
    $type = mysqli_real_escape_string($db,htmlspecialchars($_POST['type'])); 
    $num = mysqli_real_escape_string($db,htmlspecialchars($_POST['num']));
    $nomcarte = mysqli_real_escape_string($db,htmlspecialchars($_POST['nomcarte']));
    $securite = mysqli_real_escape_string($db,htmlspecialchars($_POST['securite']));
    $exp = mysqli_real_escape_string($db,htmlspecialchars($_POST['exp']));

    

    if($type !== "" && $num !== "" && $nomcarte !== "" && $securite !== "" && $exp !== "")
    {
        $requete = "SELECT count(*) FROM client WHERE 
              type_carte = '".$type."' and numero_carte = '".$num."' and nom_carte = '".$nomcarte."' 
              and cvc = '".$securite."' and expiration = '".$exp."'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['nomcarte'] = $nomcarte;
           
           header('Location: principalpay.php');
        }
        else
        {
         echo "Echec de paiement vos informations bancaires sont fausses. <br> Veuillez recommencer";
         header("refresh:2;url=payer.php");
      }
    }
    else
    {
      echo "Echec de paiement vos informations bancaires sont fausses. <br> Veuillez recommencer";
      header("refresh:2;url=payer.php");
    
    }
}
else
{
   header('Location: payer.php');
}
mysqli_close($db); // fermer la connexion
?>