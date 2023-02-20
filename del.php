<?php
$cin=$_GET['Cin'];
include('connexion/configr.php');
$req="DELETE FROM employeur WHERE Cin=?";
$stmt=$pdo->prepare($req);
$stmt->bindValue(1,$cin,PDO::PARAM_STR);
$stmt->execute();
header('location:index.php');

?>