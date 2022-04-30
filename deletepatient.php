<?php
require('connexion.php');
$req=$pdo->prepare("DELETE FROM patient WHERE id_pat='".$_GET['id_pat']."'");
if($req->execute())
	header('Location: basic_table.php'); 
else
	die("erreur de suppression");
?>