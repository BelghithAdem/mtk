<?php
//On commence par démarrer une session au tout début du document, car des variables de sessions sont prévues dans cette page.
     session_start();
     ?>
<?php
include("connexion/configr.php");
if (isset($_POST['b1'])){
	if(!empty($_POST['nd'])&& !empty($_POST['ad'])&& !empty($_POST['s'])
    && !empty($_POST['p'])){

$req="INSERT INTO proposition(Destinataire,NomDestinateur,Sujet,Description)
 VALUES('$_POST[nd]','$_POST[ad]','$_POST[s]','$_POST[p]')";
		$res=$pdo->exec($req);
       header("Location:demandeU.php");
        if(!$res){
            echo '<script>alert("Insertion dans la table inscrie impossible!!");</script>';
        }
        else{
         echo '<script>alert("avec succes");</script>';
        
        
        }
            }
            else {
               echo '<script>alert("Vous devez saisir tous les champs du formulaire!");</script>';
        }
            }
           
           

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
    <link rel="stylesheet" href="data.css" />
    <title>Demande</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="ic.png" alt="Logo De MTK">
                    </div>
            <div class="list-group list-group-flush my-3">
                <a href="user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                      Fiche Employé</a>
                <a href="demandeU.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                        Créer Une Demande</a>
             
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Créer et Envoyer Une Demande a votre Admin</h2>
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
      <h1>Demande</h1>
    </div>
    <div class="form-content">
    <form action="demandeU.php" method="POST">
        <div class="form-group">
          <label for="username">Nom Destinataire</label>
          <input type="text" id="username" name="nd" />
        </div>
        <div class="form-group">
          <label for="text">Admin Destinateur</label>
          <?php
// Connect to the database using PDO
$dsn = "mysql:host=localhost;dbname=mtk";
$username = "root";
$password = "";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "Error connecting to the database: " . $e->getMessage();
    exit;
}

// Retrieve the options from the database
$query = "SELECT Nom, Prenom FROM admin";
$statement = $db->prepare($query);
$statement->execute();
$options = $statement->fetchAll();

// Print the select tag with options
echo "<select>";
foreach ($options as $option) {
    echo "<option value='" . $option['Nom'] . "'>" . $option['Nom'] . "</option>";
}
echo "</select>";

?>
        </div>
        <div class="form-group">
          <label for="text">Sujet</label>
          <input type="text" id="Prénom" name="s" />
        </div>
        <div class="form-group">
        <label for="text" >Description</label>
        <textarea name="p" cols="80" rows="8"></textarea>
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