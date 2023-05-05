<?php
//ajouter de style css

//saisir les données du formulaire

$specialite = isset($_POST['specialite']) ? $_POST['specialite'] : '';

//identifier BDD
$database = "omnes_sport";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//*************************************
// si bouton1 (Rechercher) est cliqué
if (isset($_POST["button1"])){

if ($db_found) {
//commencer le query
$sql = "SELECT * FROM coach";
if ($specialite != "") {
//on recherche le livre par son titre
$sql .= " WHERE specialite LIKE '%$specialite%'";
//on cherche ce livre par son auteur aussi
}
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a des resultats
if (mysqli_num_rows($result) == 0) {
echo "<p>coach not found.</p>";
} else {
    while ($data = mysqli_fetch_assoc($result)) {

        echo ' <div class="container">
        <center>
            <div class="card">
                <div class="sneaker">
                    <div class="circle">
                        <img src="'.$data["photo_chemin"].'" class="card-img-top" alt="..." style= "width:30%" ; 
                    </div>
                
                        <div class="info">
                            <h1 class="title"> '.$data["prenom"]. ' '. $data['nom'].', Coach de '.$data["specialite"].  '</h1>   
                                <h2 class="sous-titre"> Bureau : '.$data['bureau'].'<br>Téléphone : '.$data['tel']. '<br>Email : '.$data['mail'].'<br>Tarif : '.$data['tarif']. '€</h2>
                                       
                        
                    </div>
                </div>    
            </div>
            </center>
        </div>';
    }//end while
}
}
}
?>
