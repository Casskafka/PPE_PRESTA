<h2> Gestion des Client </h2>

<?php
if (isset($_SESSION['role']) && $_SESSION['role']=='admin' ) {
	echo "<h2>Gestion des Clients</h2>";
	$leClient = null; 
	if (isset($_GET['action']) && isset($_GET['idclient'])){
		$action = $_GET['action']; 
		$idclient = $_GET['idclient']; 
		switch ($action)
		{
			case "sup" : $unControleur->deleteClient($idclient); 
						 break; 
			case "edit" : $leClient = $unControleur->selectWhereClient ($idclient); 
				break; 
		}
	}


	require_once ("vue/vue_insert_client.php");

	if (isset($_POST['Valider'])){
		$unControleur->insertClient ($_POST);
	}
	if (isset($_POST['Modifier'])){
		$unControleur->updateClient ($_POST);
		//on va actualiser la page 
		header("Location: index.php?page=4");
	}
}
if (isset($_SESSION['role']) && $_SESSION['role']=='prestataire' || $_SESSION['role']=='admin'){
	if (isset($_POST['Filtrer'])){
		$lesClient = $unControleur->selectLikeClient ($_POST['filtre']);
	} else {
			//recuperation de tous les Client 
			$lesClient = $unControleur->selectAllClients (); 
		}
	
	require_once ("vue/vue_select_clients.php");
}
?>






