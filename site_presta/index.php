<?php
ob_start(); // Start output buffer
	session_start();
	require_once("controleur/controleur.class.php"); 
	//instanciation de la classe controleur 
	$unControleur = new Controleur(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title> Site Scolarite IRIS </title>
	<meta charset="utf-8">
</head>
<body>
<center>
<?php
if (!isset($_SESSION['email']) && isset($_GET['page']) && $_GET['page'] == 0) {
    require_once("vue/vue_connexion.php");
} else if (!isset($_SESSION['email']) && isset($_GET['page']) && $_GET['page'] == 1) {
    require_once("gestion_inscription.php");
} else if (!isset($_SESSION['email']) && isset($_GET['page']) && $_GET['page'] == 9) {
    require_once("gestion_inscription_prestataire.php"); 
} else if (!isset($_SESSION['email'])) {
    require_once("vue/vue_index.php");
}

if (isset($_POST['Connexion'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $statut = $_POST['statut'];
    if ($statut == "client") {
        $unUser = $unControleur->verifConnexionClient($email, $mdp);
        if ($unUser != null) {
            $_SESSION['iduser'] = $unUser['idclient'];
            $_SESSION['email'] = $unUser['email'];
            $_SESSION['nom'] = $unUser['nom'];
            $_SESSION['prenom'] = $unUser['prenom'];
            $_SESSION['statut'] = $statut;
            $_SESSION['role'] = "user";
           header("Location: index.php?page=2");
        } else {
            echo "<br> Veuillez vérifier vos identifiants.";
        }
    }
     else if ($statut == "prestataire") { // Ajout de la session pour le prestataire
        $unPrestataire = $unControleur->verifConnexionPrestataire($email, $mdp);
        if ($unPrestataire != null) {
            $_SESSION['idprestataire'] = $unPrestataire['idprestataire'];
            $_SESSION['email'] = $unPrestataire['email'];
            $_SESSION['nom'] = $unPrestataire['nomprestataire'];
            $_SESSION['prenom'] = $unPrestataire['prenomprestataire'];
            $_SESSION['adresse'] = $unPrestataire['adressee'];
            $_SESSION['numero_telephone'] = $unPrestataire['numero_telephone'];
            $_SESSION['statut'] = $statut;
            $_SESSION['role'] = $unPrestataire['role'];
            header("Location: index.php?page=2"); // Redirection vers home.php
        } else {
            echo "<br> Veuillez vérifier vos identifiants.";
        }
    } else {
        $unUser = $unControleur->verifConnexion($email, $mdp);
        if ($unUser != null) {
            $_SESSION['iduser'] = $unUser['iduser'];
            $_SESSION['email'] = $unUser['email'];
            $_SESSION['nom'] = $unUser['nom'];
            $_SESSION['prenom'] = $unUser['prenom'];
            $_SESSION['statut'] = $statut;
            $_SESSION['role'] = $unUser['role'];
            header("location:index.php?page=2");
            // Redirection vers home.php
        } else {
            echo "<br> Veuillez vérifier vos identifiants.";
        }
    }

}


	if (isset($_SESSION['email'])) {
	echo '

	<div class="navbar">

	<a href="index.php?page=2">
		<img src="images/lg.png" height="50" >
	</a>
	<ul class="navbar-links">
		<li><a href="index.php?page=3">Les Services</a></li>
		';
		if (isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
			echo '<li><a href="index.php?page=4">Les clients</a></li>';
			echo '<li><a href="index.php?page=6">Les Prestations</a></li>';
            echo'<li><a href="index.php?page=7">Mes reservations</a></li>';

		} else if (isset($_SESSION['statut']) && $_SESSION['statut'] == "prestataire") {
			echo '<li><a href="index.php?page=12">Les clients</a></li>';
            echo '<li><a href="index.php?page=11">Mes reservations</a></li>';
        } else if (isset($_SESSION['statut']) && $_SESSION['statut'] == "client") {
            echo '<li><a href="index.php?page=7">Mes reservations</a></li>';
        }


		echo '
		<li><a href="index.php?page=5">Les prestataires</a></li>
		
		<li><a href="index.php?page=10" class="btn-blue">Déconnexion</a></li>
	</ul>
</div>
		';
	
		if (isset($_GET['page'])){
			$page = $_GET['page'] ; 
		}else {
			$page = 2; 
		}
		// $page = (isset($_GET['page'])) ? $_GET['page'] : 1 ; 
		switch ($page) {
			case  0 : require_once ("vue_connexion.php"); break;
			case  1 : require_once ("gestion_inscription.php"); break;
			case  2 : require_once ("home.php"); break;
			case  3 : require_once ("gestion_services.php"); break;
			case  4 : require_once ("gestion_clients.php"); break;
			case  5 : require_once ("gestion_prestataires.php"); break;
			case  6 : require_once ("gestion_prestation.php"); break;
			case  7 : require_once ("gestion_reservation.php"); break;
			case  8 : require_once ("gestion_mesreservations.php"); break;
			case  9 : require_once ("gestion_inscription_prestataire.php"); break;
            case  11 : require_once ("gestion_reservation_prestataire.php"); break;
            case  12 : require_once ("gestion_clients_prestataire.php"); break;





			
			case 10 : 
					session_destroy(); 
					unset ($_SESSION['email']); 
					header("Location: index.php"); 
					break;

			default : require_once ("erreur.php"); break;
		}
	}// fin du if session 

	?>
</center>





<style>

.navbar {
    background-color: #ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 50px;
    font-size: 110%;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    height: 2cm;
}

.navbar-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.navbar-links li {
    margin-right: 27px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links a {
    text-decoration: none;
    font-family: Arial, sans-serif;
}

.logo img {
    max-height: 60%;
}

.btn-blue {
    background-color: #257CFF; /* Couleur de fond bleue */

    color: white; /* Couleur du texte blanc */
    padding: 10px 20px; /* Ajustez le padding horizontal et vertical */
    border-radius: 5px; /* Coins arrondis */
}

.btn-blue:hover {
    background-color: #2980b9; /* Changement de couleur au survol */
}
</style>

<?php
ob_end_flush(); // Flush output buffer
?>