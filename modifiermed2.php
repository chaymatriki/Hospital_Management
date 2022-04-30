<?php
require('connexion.php');

$id_med=$_GET['id_med'];
$id_pat=$_GET['id_pat'];
$quantite=$_POST['quantite'];

	$sql =$pdo->prepare("UPDATE patient_med set quantite='$quantite' WHERE id_med='$id_med' and id_pat='$id_pat'");
if($sql->execute())
	header('Location: tablemed.php'); 
else
	die("erreur de modification");

?>