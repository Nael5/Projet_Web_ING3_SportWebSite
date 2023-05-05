<!DOCTYPE html>
<html>
    

    <body>
<form action = "#" method="post">

<br>
    
        <ul class="nav nav-pills">
            <li class="navi1"><a href="pageadmin.php">Page d'accueil</a></li>
    
   
        <h2>Tous les coachs de Omnes Sport</h2>
        
        <?php
        echo '</div><a href="ajoutcoach.html" >Ajouter un coach </a> ';
            echo '  </div><a href="suppcoach.html" ><br>Supprimer un coach</a>' ;
        ?>
       

        </div>
</form>

<style>
    h1{
    text-align: center;
    color : black;
  }
  .aj{
    text-align: center;
    float: left;
}

</style>
</body>
</html>

<br><br>
<?php

$database = "omnes_sport";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$nom = isset($_POST['nom']) ? $_POST['nom']: '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$specialite = isset($_POST['specialite']) ? $_POST['specialite'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$bureau = isset($_POST['bureau']) ? $_POST['bureau'] : '';
$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
$cv = isset($_POST['cv']) ? $_POST['cv'] : '';
$tarif = isset($_POST['tarif']) ? $_POST['tarif'] : '';
$photo_chemin = isset($_POST['photo_chemin']) ? $_POST['photo_chemin'] : '';


if($nom == "" && $prenom == "" && $specialite=="" && $mail == "" && $bureau == ""
&& $tel == "" && $cv == ""  && $tarif == "" && $photo_chemin == ""){
    
    $mysqli = new mysqli("localhost", "root", "", "omnes_sport");
    if($mysqli -> connect_errno){
        echo "Failed to connect to Mysql : " . $mysqli -> connect_error;
        exit();
    }
    $sql = "SELECT * FROM coach ";
    $result = mysqli_query($db_handle, $sql);
//regarder s'il y a des resultats
if (mysqli_num_rows($result) == 0) {
echo "<p>Coach not found.</p>";
} else {
echo "<table border='1'>";
echo "<tr>";
echo "<th>" . "Nom" . "</th>";
echo "<th>" . "Prenom" . "</th>";
echo "<th>" . "Specialite" . "</th>";
echo "<th>" . "Mail" . "</th>";
echo "<th>" . "Bureau" . "</th>";
echo "<th>" . "CV" . "</th>";
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
     } 
     else {
         echo "pas de coach trouvé";
     } 

if(isset($_POST["submit2"])){
    header("refresh:0;url=suppcoach.html");
    
}
?>