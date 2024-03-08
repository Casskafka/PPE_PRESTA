
<?php
if ( $_SESSION['statut']=='prestataire' ) {
	echo "<h2>Gestion des Clients</h2>";
	$leClient = null; 
	if (isset($_GET['action']) && isset($_GET['idClient'])){
		$action = $_GET['action']; 
		$idClient = $_GET['idClient']; 
		switch ($action)
		{
			case "sup" : $unControleur->deleteClient($idClient); 
						 break; 
			case "edit" : $leClient = $unControleur->selectWhereClient ($idClient); 
				break; 
		}
	}



	if (isset($_POST['Valider'])){
		$unControleur->insertClient ($_POST);
	}
	if (isset($_POST['Modifier'])){
		$unControleur->updateClient ($_POST);
		//on va actualiser la page 
		header("Location: index.php?page=3");
	}
}
	if (isset($_POST['Filtrer'])){
		$lesClient = $unControleur->selectLikeClient ($_POST['filtre']);
	} else {
			//recuperation de tous les Client 
			$lesClient = $unControleur->selectClientbyPrestataire ($_SESSION['idprestataire']); 
		}
	
	require_once ("vue/vue_select_clients_prestataire.php");

?>






