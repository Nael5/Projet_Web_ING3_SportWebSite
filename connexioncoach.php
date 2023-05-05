<?php
// Start the session
session_start();
?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
       
    </head>
    <style>

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
    width:100%;
    padding: 8%;
    border: 3% solid #f1f1f1;
    background: #fff;
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 3%;
}

/* Full-width inputs */
input[type=text] {
    width: 100%;
    padding: 5% 5%;
    margin: 2% 0;
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
 </style>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verificationcoach.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom du coach" name="username" required>
                <label><b>Prenom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le prenom du coach" name="username2" required>
                <label><b>Adresse mail</b></label>
                <input type="text" placeholder="Entrer le mail du coach" name="username3" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2 ||$err==3) 
                        echo "<p style='color:red'>Nom, prenom ou mail</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>