<?php
require('connexion.php');
$sql = "INSERT INTO medicament (nom, stock) VALUES (?,?)";
if($pdo->prepare($sql)->execute([$_POST['nom'], $_POST['stock']]))
	header('Location: tablepharma.php');
else
	die("erreur d'insertion");
?>