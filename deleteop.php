<?php
require('connexion.php');
$req=$pdo->prepare("DELETE FROM patient_op WHERE id_pat='".$_GET['id_pat']."' and  id_op='".$_GET['id_op']."' ");
if($req->execute())
	header('Location: tablemed.php'); 
else
	die("erreur de suppression");
?>