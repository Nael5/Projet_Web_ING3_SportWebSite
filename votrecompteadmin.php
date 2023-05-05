<?php
// Start the session
session_start();
$_SESSION["username"];
echo "Bonjour, ";echo $_SESSION["username"];
echo " vous êtes sur votre compte ! ";
header("refresh:1;url=pageadmin.php");

?>