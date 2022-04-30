<?php
require('connexion.php');
$id_pat=$_GET['id_pat'];
$nom=$_POST['nom'];
$quantite=$_POST['quantite'];

$result=$pdo->query("SELECT id_med FROM medicament WHERE nom='".$nom."'")->fetch();


$sql = "INSERT INTO patient_med (id_pat, id_med, quantite) VALUES (?,?,?)";
if($pdo->prepare($sql)->execute([$id_pat,$result['id_med'],$quantite]))
	header('Location: tablemed.php');
else
	die("erreur d'insertion");
?>