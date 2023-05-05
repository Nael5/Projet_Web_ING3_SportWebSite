<?php
// Start the session
session_start();
?>
<?php

$nom = isset($_POST['nom']) ? $_POST['nom']: '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$adresse = isset ($_POST['adresse']) ? $_POST['adresse'] : '';
$code_postal = isset ($_POST['code_postal']) ? $_POST['code_postal'] : '';
$ville = isset($_POST['ville']) ? $_POST['ville']: '';
$pays = isset($_POST['pays']) ? $_POST['pays']: '';
$tel = isset($_POST['tel']) ? $_POST['tel']: '';
$mail = isset($_POST['mail']) ? $_POST['mail']: '';
$logine = isset($_POST['logine']) ? $_POST['logine']: '';
$mdp = isset($_POST['mdp']) ? $_POST['mdp']: '';
$carte_etudiant = isset($_POST['carte_etudiant']) ? $_POST['carte_etudiant']: '';
$type_carte = isset($_POST['type_carte']) ? $_POST['type_carte']: '';
$numero_carte = isset($_POST['numero_carte']) ? $_POST['numero_carte']: '';
$nom_carte = isset($_POST['nom_carte']) ? $_POST['nom_carte']: '';
$cvc = isset($_POST['cvc']) ? $_POST['cvc']: '';
$expiration = isset($_POST['expiration']) ? $_POST['expiration']: '';



$err_msg = "";

if($nom == ""){
$err_msg .= "Veuillez renseigner votre nom <br/>";
}
if($prenom == ""){
    $err_msg .= "Veuillez renseigner votre prénom  <br/>";
}
if ($adresse == "" ) {
    $err_msg .= "Veuillez remplir une adresse <br/>";
}
if($code_postal == ""){
    $err_msg .= "Veuillez renseigner votre code postal  <br/>";
}
if($pays == ""){
    $err_msg .= "Veuillez renseigner votre pays <br/>";
}
if($tel == ""){
    $err_msg .= "Veuillez renseigner votre numéro de télephone  <br/>";
}
if($mail == ""){
    $err_msg .= "Veuillez renseigner votre e-mail  <br/>";
}
if($logine == ""){
    $err_msg .= "Veuillez renseigner un login  <br/>";
}
if($mdp == ""){
    $err_msg .= "Veuillez renseigner un mdp  <br/>";
}
if ($carte_etudiant == "") {
    $err_msg .= "êtes vous titulaire d'une carte d'étudiant? <br/>";
}
if ($numero_carte == "") {
    $err_msg .= "Veuillez renseigner un numéro de carte <br/>";
}
if ($nom_carte == "") {
    $err_msg .= "Veuillez renseigner le nom sur votre carte <br/>";
}
if ($type_carte == "") {
    $err_msg .= "Veuillez renseigner le type de votre carte <br/>";
}
if ($cvc == "") {
    $err_msg .= "Veuillez renseigner le code de sécurité CVC <br/>";
}
if ($expiration == "") {
    $err_msg .= "Veuillez renseigner la date d'expiration de votre carte <br/>";
}

if ($err_msg == ""){
    $mysqli = new mysqli("localhost","root","","omnes_sport");
if($mysqli -> connect_errno)
{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$sql = "INSERT INTO client (nom, prenom, adresse, ville, code_postal, pays, tel, carte_etudiant,logine, mdp, mail, type_carte, numero_carte, nom_carte, cvc, expiration)
VALUES('$nom','$prenom','$adresse','$ville','$code_postal','$pays','$tel','$carte_etudiant','$logine','$mdp','$mail','$type_carte','$numero_carte','$nom_carte','$cvc','$expiration')";


if ($mysqli->query($sql) === TRUE) {
    echo "Votre compte a bien été créé";
    header("refresh:1;url=pageclient.php");

  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  } 
}
else {
    echo $err_msg; 
    header("refresh:2;url=creation_client.html");
 
}
if ($err_msg == ""){
    $mysqli = new mysqli("localhost","root","","omnes_sport");
    
if($mysqli -> connect_errno)
{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
}
?>