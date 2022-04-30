<?php
require('connexion.php');

$id_equip=$_GET['id_equip'];
$quantite = (isset($_POST['quantite']) ? $_POST['quantite'] : '');
$nom = (isset($_POST['nom']) ? $_POST['nom'] : '');
$chambre = (isset($_POST['chambre']) ? $_POST['chambre'] : '');

$r=0;

if ($quantite)
{
	$sql =$pdo->prepare("UPDATE equipement set quantite='$quantite' WHERE id_equi='$id_equip'");
	$sql->execute();
}
if ($nom)
{
	$sql =$pdo->prepare("UPDATE equipement set nom='$nom' WHERE id_equi='$id_equip'");
	$sql->execute();
}
if ($chambre)
{
	$sql =$pdo->prepare("UPDATE equipement set id_cham='$chambre' WHERE id_equi='$id_equip'");
	$sql->execute();
}
$r=1;
if ($r==1) {
	header('Location: tableequip.php'); } 
?>