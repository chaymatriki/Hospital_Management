<?php
require('connexion.php');
$req=$pdo->prepare("DELETE FROM patient_med WHERE id_pat='".$_GET['id_pat']."' and  id_med='".$_GET['id_med']."' ");
if($req->execute())
	header('Location: tablemed.php'); 
else
	die("erreur de suppression");
?>