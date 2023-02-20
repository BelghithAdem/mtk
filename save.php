
<?php
$p=$_GET['Cin'];
$d=$_GET['Nom'];
$e=$_GET['Prenom'];
$n=$_GET['Sexe'];
$pr=$_GET['email'];
$no=$_GET['mdp'];
$df=$_GET['date'];
$ad=$_GET['Adresse'];
$se=$_GET['Service'];
include('connexion/configr.php');

//try{
$req="UPDATE employeur SET Cin=:p,Nom=:d,Prenom=:e,Sexe=:n,email=:pr,mdp=:no,Date=:dg,Adresse=:ad,Service=:se WHERE email=:pr";
$stmt=$pdo->prepare($req);
$stmt->bindValue(':p',$p,PDO::PARAM_INT);
$stmt->bindValue (':d', $d, PDO::PARAM_STR);
$stmt->bindValue(':e',$e,PDO::PARAM_STR);
$stmt->bindValue(':n',$n,PDO::PARAM_STR);
$stmt->bindValue(':pr',$pr,PDO::PARAM_STR);
$stmt->bindValue(':no',$no,PDO::PARAM_STR);
$stmt->bindValue(':dg',$df,PDO::PARAM_STR);
$stmt->bindValue(':ad',$ad,PDO::PARAM_STR);
$stmt->bindValue(':se',$se,PDO::PARAM_STR);





//}
//catch(PDOException $e){
	//echo "Failed Update:".$e->getMessage();
//}
$stmt->execute();

header('location:user.php');




?>