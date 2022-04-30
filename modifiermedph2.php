<?php
require('connexion.php');

$id_med=$_GET['id_med'];
$stock=$_POST['stock'];

	$sql =$pdo->prepare("UPDATE medicament set stock='$stock' WHERE id_med='$id_med'");
if($sql->execute())
	header('Location: tablepharma.php'); 
else
	die("erreur de modification");

?>