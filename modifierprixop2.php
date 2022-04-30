<?php
require('connexion.php');

$id_op=$_GET['id_op'];
$prix=$_POST['prix'];

	$sql =$pdo->prepare("UPDATE operation set prix='$prix' WHERE id_op='$id_op'");
if($sql->execute())
	header('Location: prixop.php'); 
else
	die("erreur de modification");

?>