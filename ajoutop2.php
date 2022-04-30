<?php
require('connexion.php');
$id_pat=$_GET['id_pat'];
$id_op=$_POST['id_op'];

$sql = "INSERT INTO patient_op (id_pat, id_op) VALUES (?,?)";
if($pdo->prepare($sql)->execute([$id_pat,$id_op]))
	header('Location: tablemed.php');
else
	die("erreur d'insertion");
?>