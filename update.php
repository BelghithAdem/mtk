
<?php
//récuperer l'ide de l'utilisateur à modifier


$ev=$_GET['email'];

include('connexion/configr.php');
$req="SELECT * FROM employeur WHERE email=?";
$stmt=$pdo->prepare($req);
$stmt->bindValue(1,$ev,PDO::PARAM_STR);
$stmt->execute();
$ligne=$stmt->fetch(PDO::FETCH_OBJ);


?>
<?php
//On commence par démarrer une session au tout début du document, car des variables de sessions sont prévues dans cette page.
     session_start();
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="styles4.css" />
    <link rel="stylesheet" href="data.css" />
    <title>Les Nouveautés</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="ic.png" alt="Logo De MTK">
                    </div>
            <div class="list-group list-group-flush my-3">
                <a href="user.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                      Modifier Employé</a>
                <a href="demandeU.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                       Créer Une Demande </a>
             
                <a href="NouveautésU.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        Nouveautés</a>
                        <a href="logout.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    Déconnexion</a>
          
                        </i>
                        <?php 
//Démarrer une nouvelle session ou restaurer celle trouvée sur le serveur

//si $_SESSION["login"] est non vide implique que l'utilisateur a bien été authentifié
if(isset($_SESSION["email"])){
	

}
else{
	//Sinon demander à l'utilisateur de s'authentifier redirection vers la page login.php
	header("Location:login.php");
}
?>

                   
            </div>
</div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Modification Des Employeurs</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            
                                <i class="fas fa-user me-2"></i>
                                <?php 
//Démarrer une nouvelle session ou restaurer celle trouvée sur le serveur

//si $_SESSION["login"] est non vide implique que l'utilisateur a bien été authentifié
if(isset($_SESSION["email"])){
	echo "Bonjour ".$_SESSION["email"]."<br>";
	
}
else{
	//Sinon demander à l'utilisateur de s'authentifier redirection vers la page login.php
	header("Location:login.php");
}
?>
                        
                           
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">149.6M</h3>
                                <p class="fs-5">Production</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Saleriés</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">45</h3>
                                <p class="fs-5">Véhicules</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">B414/1995</h3>
                                <p class="fs-5">Commerce</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
  <!-- Form-->
  <div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Modification</h1>
    </div>
    <div class="form-content">
    <form  action="save.php" method ="GET">
    <table>
	<tbody><tr>
    	<td colspan="2"></td>
    </tr>
    <tr>
    	<td width="120">Nom </td>
        <td><span><input type="text" name="Nom" placeholder="nom"  value="<?= $ligne->Nom ;?>"></span></td>
    </tr>
	<tr>
    	<td width="120"> Prénom</td>
        <td><span><input type="text" name="Prenom" placeholder="nom"  value="<?= $ligne->Prenom ;?>"></span></td>
    </tr>
	<tr>
    	<td>CIN (code)</td>
        <td><span><input type="text" name="Cin" placeholder="nom"  value="<?= $ligne->Cin ;?>"> </span></td>
    </tr>
	<tr>
    	<td>Sexe</td>
        <td><span><input type="text" name="Sexe" placeholder="nom"  value="<?= $ligne->Sexe ;?>"></span></td>
    </tr>
	<tr>
    	<td>Date de naissance</td>
        <td><span><input type="Date" name="date" placeholder="nom"  value="<?= $ligne->Date ;?>"></span></td>
    </tr>
	<tr>
    	<td>Adresse</td>
        <td><input type="text" name="Adresse" placeholder="nom"  value="<?= $ligne->Adresse ;?>" style="width:350px;" ></td>
    </tr>
	
	<tr>
    	<td width="120">Adresse e-mail </td>
        <td><span><input type="text" name="email" placeholder="nom"  value="<?= $ligne->email ;?>" style="width:200px;" ></span></td>
    </tr>
    <tr>
    	<td width="120">Mot De Passe </td>
        <td><span><input type="text" name="mdp" placeholder="nom"  value="<?= $ligne->mdp ;?>"></span></td>
    </tr>
	
	<tr>
    	<td>Service</td>
        <td><span><input type="text" name="Service" placeholder="nom"  value="<?= $ligne->Service ;?>"  ></span></td>
    </tr>    
</tbody></table> 

    <input type="submit" name="ok" value="Enregistrer">
    </form>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Register Account</h1>
    </div>
   
  </div>
</div>

     
                        
                           
               

            
             
                      <!-- Form-->
     
                <!-- produit -->
               
        
                <!-- produit -->
      
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>