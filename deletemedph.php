<?php
require('connexion.php');
$req=$pdo->prepare("DELETE FROM medicament WHERE id_med='".$_GET['id_med']."' ");
if($req->execute())
	header('Location: tablepharma.php'); 
else
	die("erreur de suppression");
?>