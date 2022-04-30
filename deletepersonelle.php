<?php
require('connexion.php');
$req=$pdo->prepare("DELETE FROM personelles WHERE id_pers='".$_GET['id_pers']."'");
if($req->execute())
	header('Location: listepersonnel.php'); 
else
	die("erreur de suppression");
?>