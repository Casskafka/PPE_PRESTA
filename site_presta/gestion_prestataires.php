





<br>
<br>



<?php
if (isset($_SESSION['role']) && $_SESSION['role']=='admin') {
    echo "Gestion des Prestataires";
}
?>


<?php
$lesServices = $unControleur->selectAllService(); 
if (isset($_SESSION['role']) && $_SESSION['role']=='admin'){
    
    
    $lePrestataire = null; 
    if (isset($_GET['action']) && isset($_GET['idprestataire'])){
        $action = $_GET['action']; 
        $idprestataire = $_GET['idprestataire']; 
        switch ($action) {
            case "sup": 
                $unControleur->deletePrestataire($idprestataire); 
                break; 
            case "edit": 
                $lePrestataire = $unControleur->selectWherePrestataire($idprestataire); 
                break; 
        }
    }

    require_once("vue/vue_insert_prestataire.php");

    if (isset($_POST['Valider'])){
        $unControleur->insertPrestataire($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updatePrestataire($_POST);
        // Actualisation de la page 
        header("Location: index.php?page=2");
    }
}

if (isset($_POST['Filtrer'])){
    $filtre_service = $_POST['filtre_service'];
    $filtre_ville = $_POST['filtre_ville'];
    $lesPrestataires = $unControleur->selectLikePrestataires($filtre_service, $filtre_ville);

} else {
    // Récupération de tous les prestataires 
    $lesPrestataires = $unControleur->selectAllPrestataires(); 
    $lesServices = $unControleur->selectAllService();
}

require_once("vue/vue_select_prestataires.php");
?>
