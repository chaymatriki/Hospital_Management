<?php
require('connexion.php');
$req=$pdo->prepare("DELETE FROM equipement WHERE id_equi='".$_GET['id_equi']."'");
if($req->execute())
	header('Location: tableequip.php'); 
else
	die("erreur de suppression");
?>