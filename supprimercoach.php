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
if (empty($choice)) {
    $choice = 0;
}
$choice = (int)$choice;
//identifier BDD
$database = "omnes_sport";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    //commencer le query
    $sql = 'DELETE FROM coach WHERE prenom="'.$_POST['prenom'].'" and nom="'.$_POST['nom'].'"';
    $result = mysqli_query($db_handle, $sql);
    $sql = "SELECT * from coach";
    $result = mysqli_query($db_handle, $sql);
    echo "<table border='1'>";
echo "<tr>";
echo "<th>" . "Nom" . "</th>";
echo "<th>" . "Prenom" . "</th>";
echo "<th>" . "Specialite" . "</th>";
echo "<th>" . "Mail" . "</th>";
echo "<th>" . "Bureau" . "</th>";
echo "<th>" . "cv" . "</th>";
echo "<th>" . "Tarif" . "</th>";
echo "<th>" . "Photo" . "</th>";
//afficher le resultat
while ($data = mysqli_fetch_assoc($result)) {


echo "<tr>";
echo "<td>" . $data['nom'] . "</td>";
echo "<td>" . $data['prenom'] . "</td>";
echo "<td>" . $data['specialite'] . "</td>";
echo "<td>" . $data['mail'] . "</td>";
echo "<td>" . $data['bureau'] . "</td>";
echo "<td>" . $data['cv'] . "</td>";
echo "<td>" . $data['tarif'] . "</td>";
$image = $data['photo_chemin'];
echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
echo "</tr>";
}
echo "</table>";
} 

//fermer la connexion
mysqli_close($db_handle);

?>