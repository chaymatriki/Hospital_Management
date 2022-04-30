<?php 
session_start();
require('connexion.php');
$res=$pdo->query("SELECT * FROM user WHERE login='".$_POST['username']."'");
$count=$res->rowCount();
if($res->rowCount()!=0)
{
	$user=$res->fetch();
	if($user['password']==($_POST['password']))
	{
		$_SESSION['username']= $user['login'];
		$_SESSION['user_type']= $user['type'];
		$_SESSION['id_pers']= $user['id_pers'];
		$_SESSION['isConnected']="true";
		switch ($user['type']) {
			case "agent d'acceuil":
				header('Location: basic_table.php');
				break;
			case "gestionnaire":
				header('Location: table_pers.php');
				break;
			case "medecin":
				header('Location: tablemed.php');
				break;
			case "pharmacien":
				header('Location: tablepharma.php');
				break;
			case "financier":
				header('Location: tablefinance.php');
				break;
			default:
				# code...
				break;
		}
	}
	else
		echo "mot de passe incorrect";
}
else
	echo "utilisateur non trouvé";
?>