<?php 
$doc = new DOMDocument();
$doc->load('cvcoach/cvvictor.xml');
$exppro = $doc->getElementsByTagName('etatCivil');
print_r("ETAT CIVIL : " . "<br><br>");
foreach($exppro as $exp){
    $Nom = $exp ->getElementsByTagName('nom')->item(0)->nodeValue;
    $prenom = $exp ->getElementsByTagName('prenom')->item(0)->nodeValue;
    $dateDeNaissance = $exp ->getElementsByTagName('dateDeNaissance')->item(0)->nodeValue;
    $email = $exp ->getElementsByTagName('email')->item(0)->nodeValue;

    print_r ("Nom : $Nom " . "<br>" . "Prenom : $prenom" . "<br>" . "Date de naissance : $dateDeNaissance" . "<br>" . "Email : $email" . "<br><br>");
}


$exppro = $doc->getElementsByTagName('formation');
print_r("FORMATIONS : " . "<br><br>");
foreach($exppro as $exp){
    $libelle = $exp ->getElementsByTagName('libelle')->item(0)->nodeValue;
    $annee = $exp ->getElementsByTagName('annee')->item(0)->nodeValue;
    print_r ("$prenom est titulaire du $libelle depuis $annee" . "<br><br>");
}

$exppro = $doc->getElementsByTagName('experience');
print_r("EXPERIENCES : " . "<br><br>");
foreach($exppro as $exp){
    $poste = $exp ->getElementsByTagName('poste')->item(0)->nodeValue;
    $debut = $exp ->getElementsByTagName('debut')->item(0)->nodeValue;
    $fin = $exp ->getElementsByTagName('fin')->item(0)->nodeValue;
    print_r ("$prenom a travaillé comme $poste de $debut à $fin" . "<br><br>");

}

print_r("<br><br><br>");
echo '<a href="cardio-training.php">Retour</a>';
?>