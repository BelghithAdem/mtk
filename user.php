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
    <title>FIche Employé</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="ic.png" alt="Logo De MTK">
                    </div>
            <div class="list-group list-group-flush my-3">
                <a href="user.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                      Fiche Employé</a>
                <a href="demandeU.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        Créer Une Demande</a>
             
                <a href="NouveautésU.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        Nouveautés</a>
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
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex -items-center">
                    <i class="fas fa -left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Fiche Personnelle</h2>
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
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around -items-center rounded">
                            <div>
                                <h3 class="fs-2">149.6M</h3>
                                <p class="fs-5">Production</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around -items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Saleriés</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around -items-center rounded">
                            <div>
                                <h3 class="fs-2">45</h3>
                                <p class="fs-5">Véhicules</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around -items-center rounded">
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
      <h1>Fiche Employé </h1>
    </div>
    <div class="form-content">

<?php
// Connect to the database



// Connect to the database using PDO

// Check if the user is logged in
if(isset($_SESSION['email'])) {
  // Get the user's data from the database
  $user_id = $_SESSION['email'];
  include('connexion/configr.php');
  $query = "SELECT * FROM employeur WHERE email = ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$user_id]);
  $user_data = $stmt->fetch(PDO::FETCH_ASSOC);}?>

  
  <?php
  echo "<form method='post' action='user.php'>";
  echo "<table>";
  echo "<tr>";
  echo "<td><label>Cin:</label></td>";
  echo "<td>".$user_data['Cin']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><label>Name:</label></td>";
  echo "<td>" . $user_data['Nom'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><label>Prenom:</label></td>";
  echo "<td>" . $user_data['Prenom'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><label>Sexe:</label></td>";
  echo "<td>" . $user_data['Sexe'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><label>email:</label></td>";
  echo "<td>" . $user_data['email'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><label>MDP:</label></td>";
  echo "<td><input type='password' name='password' value='". $user_data['mdp'] ."' disabled/></td>";
  echo "</tr>";
  echo "<td><label>Date:</label></td>";
  echo "<td>" . $user_data['Date'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><label>Adresse:</label></td>";
  echo "<td>" . $user_data['Adresse'] . "</td>";
  echo "</tr>";
  echo"<tr>";
  echo "<td><label>Service:</label></td>";
  echo "<td>" . $user_data['Service'] . "</td>";
  echo"</tr>";
  echo"</table>";
  echo "<a href ='update.php?email=$user_data[email]'>Modifier</a>";
  echo "</form>";
  ?>
 
 <style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}

label {
font-weight: bold;
}


input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}

input[type=submit] {
background-color: #black;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #black;
}

.form {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}
</style>

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