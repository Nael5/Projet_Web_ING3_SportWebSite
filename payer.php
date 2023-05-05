<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Payer</title>
          <style type="text/css">
    
    body{
    background: pink;
}
#container{
    width:30%;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    height: 30%;
    border: 3% solid #f1f1f1;
    background: white;
    margin-left: auto;
    margin-right: auto;
    width: 28%;

}
#container h1{
    width: 38%;
    margin: 0 auto;
    
}

/* Full-width inputs */
input[type=text] {
    display: inline-block;
    border: 1% solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: orange;
    color: white;
    padding: 5% 5%;
    margin: 2% 0%;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: red;
    border: 1px solid red;
}
p{
    color: black;
    text-align: center;
}
table{
    margin: auto;
}
h3{
    text-align: center;

}
    
            </style>
    <meta charset="utf-8">
    </head>
<?php
// Set session variables (variables globales)
?>
    <body>
    <h3>Paiement pour la séance de sport</h3>

    <form action="payertraitement.php" method="post">

<table border="1">
<tr>
<td>Payer par:</td>
    <td>
    <input type="radio" name="type" value="MasterCard">MasterCard<br>
    <input type="radio" name="type" value="Visa" >Visa<br>
    <input type="radio" name="type" value="Amex">American Express<br>
    <input type="radio" name="type" value="PayPal">PayPal<br>
    </td>
</tr>
<tr>
<td>Numéro de carte de crédit</td>
    <td>
    <input type='number_format' name="num" >
    </td>
</tr>
<td>Nom sur la carte</td>
    <td>
    <input type="text" name="nomcarte">
    </td>
</tr>
</tr>
<td>Date d'expiration</td>
    <td>
    <input type="date" name="exp">
    </td>
</tr>
<td>Code de sécurité</td>
    <td>
    <input type='number_format' name="securite" maxlength="4" minlength="3" >
    </td>
</tr>
<tr>

    <div class="mySubmit">
    <td colspan="2" align="pading-left">
    <input type="submit" name ="button1" value="Créer">
    </td>
</div>
</div>
</tr>
</table>
</form>
<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Donnée incorrect</p>";
                }
 
?>