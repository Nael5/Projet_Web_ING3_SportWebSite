<!DOCTYPE html>
    <html>
    <head>
    <title>Formulaire utilisateur </title>
          <style type="text/css">
    
    h2{
        padding-left: 30%;
        color: palevioletred;
    }
    #case {
        float: right;
    }
    td{
        padding-left: 10px;
    }
    .mySubmit {
        margin: 10px 10px 10px 10px;
    }
            </style>
    <meta charset="utf-8">
    </head>
    <body>

<h2>Quel type d'utilisateur êtes-vous?</h2>
<form action="choixformulaire.php" method="post">
    <table>
<tr>
     <td> Votre statut d'utilisateur : </td>
     <td>
     <input type="radio" name="statu" value="administrateur">Administrateur <br>
     <input type="radio" name="statu" value="coach">Coach <br>
     <input type="radio" name="statu" value="nouveauclient">Nouveau Client <br>
     <input type="radio" name="statu" value="dejaclient">Déjà Client <br>
     </td>
</tr>
<tr>
    <div class="mySubmit">
    <td colspan="2" align="center">
    <input type="submit" value="Soumettre">
    </td>
    </tr>
</form>
</div>
</body>
</html>