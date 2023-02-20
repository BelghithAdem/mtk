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
    <link rel="stylesheet" href="data.css" />
    <title>Ajouter Des Nouveautés</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="ic.png" alt="Logo De MTK">
                    </div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                      Gestion Des Employeés</a>
                <a href="AjoutEmp.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        Ajouter Des Employeés</a>
             
                <a href="Demendesrecu.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        Demendes Récus</a>
                <a href="Nouveautés.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                    Nouveautés</a>
                <a href="PropositionRecu.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        </i>Propositions Des Citoyens</a>
                        <a href="AjoutAdmin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    Ajouter un Admin</a>
                    <a href="logout.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    Déconnexion</a>
            <!--<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>-->
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
                    <h2 class="fs-2 m-0">Listes Des Nouveautés</h2>
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

             
                <?php
  if(isset($_POST['btn-ajouter'])){
      //connexion à la base de données
      $con = mysqli_connect("localhost","root","","mtk");
      //recupération des données du formulaire
      $titre = $_POST['titre'];
      $description = $_POST['description'];
      if(!empty($titre) && !empty($description)){
          //verifier si le produit existe déjà dans la base de données
          $req1 = mysqli_query($con, "SELECT titre ,descrip FROM produit WHERE titre ='$titre' AND descrip = '$description'");
          if(mysqli_num_rows($req1) > 0) {
              //si le produit existe déjà:
              $message = '<p style="color:red" >Le produit existe déjà</p>';
          }else {
              //sinon
              if(isset($_FILES['image'])){
                  //si une image a été télécharger:
                  $img_nom = $_FILES['image']['name']; //On récupère le nom de l'image 
                  $tmp_nom = $_FILES['image']['tmp_name']; //Nous définissons un nom temporaire
                  $time =time(); //On recupere l'heure actuelle
                  //On renomme l'image

                  $nouveau_nom_img = $time.$img_nom ;

                  //On déplace l'image dans le dossier images-produits

                  $deplacer_image = move_uploaded_file($tmp_nom,"images-produits/".$nouveau_nom_img) ;

                  if($deplacer_image){
                      //si l'image a été déplacé :
                      //insérons le titre ,la description  et le nom de l'image dans la base de donnée 
                      $req2 = mysqli_query($con,"INSERT INTO produit VALUES (NULL,'$titre','$description','$nouveau_nom_img')") ;
                       if($req2){
                           //si les informations ont été inséré dans la base de données
                           $message = '<p style="color:green">Produit ajouté ! </p>';
                       }else {
                           //si non
                           $message = '<p style="color:red ">Produit Non ajouté !</p>';
                       }
                  }

              }
          }
      }else {
          //si tous les champs ne sont pas remplie on a :
        $message = '<p style="color:red">Veuillez remplir tous les champs !</p>';
      }
  }


?>               <!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Ajouter Des Nouveautées</h1>
    </div>
    <div class="form-content">
    <section class="input_add">
      <form action="" method="POST" enctype="multipart/form-data">
      <div class="message">
               <?php 
               if(isset($message)){
                   //si la variable message existe , on affiche le contenu de la variable
                   echo $message ;
               }

                   ?>
           </div>
        <div class="form-group">
        <label>Titre</label>
            <input type="text" name="titre">
        </div>
        <div class="form-group">
        <label>Description du Nouveauté</label>
            <textarea name="description"  cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
        <label>Ajouter une image</label>
            <input type="file" name="image">
        </div>
        
        
   
        <div class="form-group">
        <input type="submit" value="Ajouter" name="btn-ajouter">
        </div>
        <div class="form-group">
        <a href="listn"   
   > Liste Des Nouveautés</a>
        </div>
      </form>
              </section>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Register Account</h1>
    </div>
    <div class="form-content">
      
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