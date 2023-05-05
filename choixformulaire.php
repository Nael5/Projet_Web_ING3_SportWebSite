<?php

$statu = isset ($_POST['statu']) ? $_POST['statu'] : '';

$err_msg = "";

if ($statu == "") {
    $err_msg .= "Veuillez remplir un statu de client <br/>";
}
if($statu == "dejaclient")
{
    header("refresh:0;url=connexionclient.php");
}
if($statu == "nouveauclient")
{
    header("refresh:0;url=creation_client.html");
}
if($statu == "administrateur")
{
    header("refresh:0;url=connexionadmin.php");
}
if($statu == "coach")
{
    header("refresh:0;url=connexioncoach.php");
}

?>