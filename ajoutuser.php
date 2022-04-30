<?php
require('connexion.php');
$sql = "INSERT INTO user (nom_user,prenom_user,type, login, password,accepte) VALUES (?,?,?,?,?,?)";
if($pdo->prepare($sql)->execute([ $_POST['nom'], $_POST['prenom'],$_POST['type'], $_POST['login'], $_POST['password'],'non']))
	header('Location: login.php');
else
	die("erreur d'insertion");
?>