<?php
require('connexion.php');
$req=$pdo->prepare("DELETE FROM user WHERE id_user='".$_GET['id_user']."'");
if($req->execute())
	header('Location: table_pers.php'); 
else
	die("erreur de suppression");
?>