<?php
//On commence par démarrer une session au tout début du document, car des variables de sessions sont prévues dans cette page.
     session_start();
	 	/*Traitement du formulaire après envoi*/
		 if(isset($_POST["Login"])){
			include("connexion/configr.php");
			  $login=$_POST["email"];
		  $passwd=$_POST["pass"];
			  $sql="select * from employeur where email=? and mdp=?";
			  $sql1="select * from admin where email=? and mdp=?";
			  $stmt=$pdo->prepare($sql); 
			  $stmt1=$pdo->prepare($sql1);
			  $stmt->bindValue(1,$login,PDO::PARAM_STR);
			  $stmt1->bindValue(1,$login,PDO::PARAM_STR);
			  $stmt->bindValue(2,$passwd,PDO::PARAM_STR);
			  $stmt1->bindValue(2,$passwd,PDO::PARAM_STR);
			  $res=$stmt->execute();
			  $res1=$stmt1->execute();
			  $tab=$stmt->fetchAll();
			  $tab1=$stmt1->fetchAll();
		   /*le cas d'un utilisateur normal remplissage du $_SESSION["login"] et redirection vers la page secrete_1.php */
			   if(count($tab)==1){
				   $_SESSION["email"]=$login;
				   header("Location:user.php");
				   
	 
			   }
			   
			 /*le cas d'un administrateur remplissage du $_SESSION["login"] , de $_SESSION["admin"] et redirection vers la page secrete_2.php */
			   else if (count($tab1)==1){
				   $_SESSION["email"]=$login;
				   //$_SESSION["admin"]=true;
				   header("Location:index.php");
				}  
								
		
		   }
		
	   
	  
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="data1.css">
<!--===============================================================================================-->
<script>
    function verification()
    {
    if(document.form.pass.value=="")
    { alert("Mot De Passe Incorrect! ");return false;
    }
    if(document.form.email.value=="")
    { alert("Veuillez Entrer Votre Adresse Email SVP"); return false; }
    if(document.form.email.value.indexOf("@")==-1)
    { alert("vérifier Votre Adresse Email"); return false;}
    alert("inscription achevée!!");}
    </script>
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
<a href="indexSite.php"  style="  
  
  display: inline-block;
  margin-right: 20px; ">Retour a la page de garde </a>
		
      <h1 style="color : #c49617;">Se Connecter </h1>
    </div>
    <div class="form-content">
      <form  name="form" method="POST">
        <div class="form-group">
          <label for="username">email</label>
          <input  type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="input100" type="password" name="pass" placeholder="Mot De Passe">
        </div>
        <div class="form-group">
          <label class="form-remember">
          
          </label><a >Contacter L'administrateur Si Vous Avez Oublié Le Mot De Passe</a>
        </div>
        <div class="form-group">
          <button type="submit" style="background-color: #c49617;"  onclick="verification()" name="Login">Connexion</button>
        </div>
      </form>
    </div>
  </div>

                       
<div class="pen-footer"><a href="https://www.behance.net/gallery/30478397/Login-Form-UI-Library" target="_blank"><i class="material-icons">arrow_backward</i>View on Behance</a><a href="https://github.com/andyhqtran/UI-Library/tree/master/Login%20Form" target="_blank">View on Github<i class="material-icons">arrow_forward</i></a></div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>