<?php
require('connexion.php');

$id_pers=$_GET['id_pers'];
$nom = (isset($_POST['nom']) ? $_POST['nom'] : '');
$prenom = (isset($_POST['prenom']) ? $_POST['prenom'] : '');
$type = (isset($_POST['type']) ? $_POST['type'] : '');
$service = (isset($_POST['service_id']) ? $_POST['service_id'] : '');

$r=0;

if ($nom)
{
	$sql =$pdo->prepare("UPDATE personelles set nom='$nom' WHERE id_pers='$id_pers'");
	$sql->execute();
}
if ($prenom)
{
	$sql =$pdo->prepare("UPDATE personelles set prenom='$prenom' WHERE id_pers='$id_pers'");
	$sql->execute();
}
if ($type)
{
	$sql =$pdo->prepare("UPDATE personelles set type='$type' WHERE id_pers='$id_pers'");
	$sql->execute();
}
if ($service)
{
	$sql =$pdo->prepare("UPDATE personelles set id_ser='$service' WHERE id_pers='$id_pers'");
	$sql->execute();
}
$r=1;
if ($r==1) {
	header('Location: listepersonnel.php'); } 
?>