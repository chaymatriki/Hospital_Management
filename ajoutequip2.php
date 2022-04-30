<?php
require('connexion.php');
$sql = "INSERT INTO equipement (id_cham, nom, quantite) VALUES (?,?,?)";
if($pdo->prepare($sql)->execute([$_POST['chambre'], $_POST['nom'],$_POST['quantite']]))
	header('Location: tableequip.php');
else
	die("erreur d'insertion");
?>