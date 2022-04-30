<?php
require('connexion.php');
$sql = "INSERT INTO personelles (nom, prenom, type, id_ser) VALUES (?,?,?,?)";
if($pdo->prepare($sql)->execute([$_POST['nom'], $_POST['prenom'], $_POST['type'],$_POST['service_id']]))
	header('Location: table_pers.php');
else
	die("erreur d'insertion");
?>