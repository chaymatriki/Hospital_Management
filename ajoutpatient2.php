<?php
require('connexion.php');
$sql = "INSERT INTO patient (nom,prenom,age,antecedant,numss,id_pers) VALUES (?,?,?,?,?,?)";
if($pdo->prepare($sql)->execute([$_POST['nom'], $_POST['prenom'], $_POST['age'],$_POST['antecedant'],$_POST['numeross'],$_POST['id-pers']
]))
	header('Location: basic_table.php');
else
	die("erreur d'insertion");
?>