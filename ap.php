<?php require('connexion.php'); 
  $id_user=$_GET["id_user"];
  $user=$pdo->query("SELECT * FROM user WHERE id_user='$id_user'")->fetch();
  $sql = "INSERT INTO personelles (nom, prenom, type,id_user,id_ser) VALUES (?,?,?,?,?)";
if($pdo->prepare($sql)->execute([$user['nom_user'],$user['prenom_user'],$user['type'],$user['id_user'],1]))
{
  $req = "UPDATE user set accepte='oui' WHERE id_user='$id_user'";
  if($pdo->prepare($req)->execute());
  { header('Location: table_pers.php'); }
}
else
  die("erreur d'insertion");
?>