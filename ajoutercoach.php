
<?php
$nom = isset($_POST['nom']) ? $_POST['nom']: '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$specialite = isset($_POST['specialite']) ? $_POST['specialite'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$bureau = isset($_POST['bureau']) ? $_POST['bureau'] : '';
$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
$cv = isset($_POST['cv']) ? $_POST['cv'] : '';
$tarif = isset($_POST['tarif']) ? $_POST['tarif'] : '';
$photo_chemin = isset($_POST['photo_chemin']) ? $_POST['photo_chemin'] : '';
$dispo = isset($_POST['tableau']) ? $_POST['tableau'] : '';

$err_msg = "";

if($nom == ""){
$err_msg .= "Veuillez renseigner votre nom <br/>";
}
if($prenom == ""){
    $err_msg .= "Veuillez renseigner votre prénom  <br/>";
}
if ($specialite == "" ) {
    $err_msg .= "Veuillez remplir une specialite <br/>";
}
if($mail == ""){
    $err_msg .= "Veuillez renseigner votre mail <br/>";
}
if($bureau == ""){
    $err_msg .= "Veuillez renseigner votre bureau <br/>";
}
if($tel == ""){
    $err_msg .= "Veuillez renseigner votre numéro de télephone  <br/>";
}

if($tarif == ""){
    $err_msg .= "Veuillez renseigner un tarif  <br/>";
}
if($dispo == ""){
    $err_msg .= "Veuillez renseigner un tarif  <br/>";
}


if ($err_msg == ""){
    $mysqli = new mysqli("localhost","root","","omnes_sport");
if($mysqli -> connect_errno)
{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
$sql = "INSERT INTO coach (nom, prenom, specialite, mail, bureau, tel, cv, tarif, photo_chemin, dispo) 
VALUES ('$nom', '$prenom', '$specialite', '$mail', '$bureau', '$tel', '$cv', '$tarif', '$photo_chemin', '$dispo')";
      if ($mysqli->query($sql) === TRUE) {
        echo "Votre nouveau coach a bien été créé";
        //header("refresh:1;url=touslescoach.php");
      } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
      } 
    }
    else {
        echo $err_msg;  
        header("refresh:2;url=ajoutcoach.html");
    }
?>



