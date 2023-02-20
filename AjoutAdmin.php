<?php
//On commence par démarrer une session au tout début du document, car des variables de sessions sont prévues dans cette page.
session_start();?>
<?php
//la saisie d'insertion de formulaire de remplir les admin
include("connexion/configr.php");
if (isset($_POST['b1'])){
	if(!empty($_POST['cin'])&& !empty($_POST['nom'])&& !empty($_POST['prenom'])
    && !empty($_POST['sexe'])&& !empty($_POST['email'])&& !empty($_POST['mdp'])&& !empty($_POST['date'])&& !empty($_POST['adresse'])
    && !empty($_POST['service'])){

      $req="INSERT INTO admin(Cin,Nom,Prenom,Sexe,email,mdp,Date,Adresse,Service)
      VALUES('$_POST[cin]','$_POST[nom]','$_POST[prenom]','$_POST[sexe]','$_POST[email]',
     '$_POST[mdp]','$_POST[date]','$_POST[adresse]','$_POST[service]')";
		  $res=$pdo->exec($req);
      header("Location:AjoutAdmin.php");
      if(!$res){
      echo '<script>alert("Insertion dans la table inscrie impossible!!");</script>';
      }
      else{
      echo '<script>alert("avec succes");</script>';
      }}
      else {
      echo '<script>alert("Vous devez saisir tous les champs du formulaire!");</script>';
      }}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="data.css" />
    <title>Ajouter Des Employés</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="ic.png" alt="Logo De MTK">
        </div>
        <div class="list-group list-group-flush my-3">
        <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        Gestion Des Employés</a>
        <a href="AjoutEmp.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        Ajouter Des Employés</a>
        <a href="Demendesrecu.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        Demendes Récus</a>
        <a href="Nouveautés.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        Nouveautés</a>
        <a href="PropositionRecu.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        </i>Propositions Des Citoyens</a>
        <a href="AjoutAdmin.php" class="list-group-item list-group-item-action bg-transparent second-text active">
        Ajouter un Admin</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        Déconnexion</a>
            <!--<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>-->
                        
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
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">Ajouter Un Admin</h2>
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
                  <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
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
      <h1>Nouveau Admin</h1>
    </div>
    <div class="form-content">
    <form action="AjoutAdmin.php" method="POST">
        <div class="form-group">
          <label for="username">CIN</label>
          <input type="text" id="username" name="cin" />
        </div>
        <div class="form-group">
          <label for="text">nom</label>
          <input type="text" id="Prénom" name="nom" />
        </div>
        <div class="form-group">
          <label for="text">Prénom</label>
          <input type="text" id="Prénom" name="prenom" />
        </div>
        <div class="form-group">
          <label for="text">Sexe</label>
          <input type="text" id="Prénom" name="sexe" />
        </div>
        <div class="form-group">
          <label for="text">Email</label>
          <input type="text" id="Prénom" name="email" />
        </div>
        <div class="form-group">
          <label for="text">Mot De Passe De Compte MTK</label>
          <input type="Password" id="Prénom" name="mdp" />
        </div>
        <div class="form-group">
          <label for="text">Date De Naissance</label>
          <input type="date" id="Prénom" name="date" />
        </div>
        <div class="form-group">
          <label for="text">Adresse</label>
          <input type="text" id="Prénom" name="adresse" />
        </div>
        <div class="form-group">
          <label for="text">Service</label>
          <input type="text" id="Prénom" name="service" />
        </div>
   
        <div class="form-group">
          <input type="submit" value="Créer" name="b1">

        </div>
      
      </form>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Register Account</h1>
    </div>
    <div class="form-content">
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>
        <div class="form-group">
          <label for="cpassword">Confirm Password</label>
          <input type="password" id="cpassword" name="cpassword" required="required"/>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required="required"/>
        </div>
        <div class="form-group">
          <button type="submit">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="pen-footer"><a href="https://www.behance.net/gallery/30478397/Login-Form-UI-Library" target="_blank"><i class="material-icons"></i></a><a href="https://github.com/andyhqtran/UI-Library/tree/master/Login%20Form" target="_blank"><i class="material-icons"></i></a></div>
                    </div>
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