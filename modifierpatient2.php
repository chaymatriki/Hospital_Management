<?php
require('connexion.php');

$id_pat=$_GET['id_pat'];
$chambre = (isset($_POST['chambre']) ? $_POST['chambre'] : '');
$entree = (isset($_POST['entree']) ? $_POST['entree'] : '');
$sortie = (isset($_POST['sortie']) ? $_POST['sortie'] : '');



$r=0;

if ($chambre)
{
	$sql =$pdo->prepare("UPDATE patient set id_cham='$chambre' WHERE id_pat='$id_pat'");
	$sql->execute();
}
if ($entree)
{
	$sql =$pdo->prepare("UPDATE patient set date_entree='$entree' WHERE id_pat='$id_pat'");
	$sql->execute();
}
if ($sortie)
{
	$sql =$pdo->prepare("UPDATE patient set date_sortie='$sortie' WHERE id_pat='$id_pat'");
	$sql->execute();
}


$r=1;
if ($r==1) {
	header('Location: basic_table.php'); } 
?>