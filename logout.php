<?php 
session_start();
if(isset($_SESSION["email"])){
	//destruction de la session et redirection vers la page login.php
	unset($_SESSION);
	session_destroy();
	header("Location:login.php");
}

?>
