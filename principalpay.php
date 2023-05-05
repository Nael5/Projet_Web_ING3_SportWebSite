<?php
// Start the session
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                if($_SESSION['nomcarte'] !== ""){
                    $nomcarte = $_SESSION['nomcarte'];
                    // afficher un message
                    echo "Merci, $nomcarteVos. Vos informations bancaires sont correcte, paiement accepté";
                    header("refresh:2;url=pageclient.php");
                    
                }
            ?>
            
        </div>
    </body>
</html>