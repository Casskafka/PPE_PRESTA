
<?php
if (isset($_SESSION['role']) && $_SESSION['role']=='admin') {
    echo "Gestion des Services";
}
?>
<?php
if (isset($_SESSION['role']) && $_SESSION['role']=='admin') {
	$leService = null; 
	if (isset($_GET['action']) && isset($_GET['idservice'])){
		$action = $_GET['action']; 
		$idservice = $_GET['idservice']; 
		switch ($action)
		{
			case "sup" : $unControleur->deleteService($idservice); 
						 break; 
			case "edit" : $leService = $unControleur->selectWhereService ($idservice); 
				break; 
		}
	}

	require_once ("vue/vue_insert_service.php");

	if (isset($_POST['Valider'])){
		$unControleur->insertService ($_POST);
	}
	if (isset($_POST['Modifier'])){
		$unControleur->updateService($_POST);
		//on va actualiser la page 
		header("Location: index.php?page=2");
	}
} // fin du if role 

	if (isset($_POST['Filtrer'])){
		$lesServices = $unControleur->selectLikeService ($_POST['filtre']);
	} else {
			//recuperation de toutes les Services 
			$lesServices = $unControleur->selectAllService (); 
		}
	
	require_once ("vue/vue_select_Services.php");
?>






