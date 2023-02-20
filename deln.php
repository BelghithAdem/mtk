<?php
$cin=$_GET['id'];
include('connexion/configr.php');
$req="DELETE FROM produit WHERE id=?";
$stmt=$pdo->prepare($req);
$stmt->bindValue(1,$cin,PDO::PARAM_STR);
$stmt->execute();
header('location:Nouveautés.php');

?>