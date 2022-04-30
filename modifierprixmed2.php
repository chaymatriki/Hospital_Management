<?php
require('connexion.php');

$id_med=$_GET['id_med'];
$prix=$_POST['prix'];

	$sql =$pdo->prepare("UPDATE medicament set prix='$prix' WHERE id_med='$id_med'");
if($sql->execute())
	header('Location: prixmed.php'); 
else
	die("erreur de modification");

?>