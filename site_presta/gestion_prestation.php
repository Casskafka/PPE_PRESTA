

<?php
if (isset($_SESSION['role']) && $_SESSION['role']=='admin') {
    echo "<h2>Gestion des Prestations</h2>";
}
?>


<?php

$lesServices = $unControleur->selectAllService(); 

if (isset($_SESSION['role']) && $_SESSION['role']=='admin') {
    $laPrestation = null; 
    if (isset($_GET['action']) && isset($_GET['idprestation'])){
        $action = $_GET['action']; 
        $idprestation = $_GET['idprestation']; 
        switch ($action)
        {
            case "sup" : $unControleur->deletePrestation($idprestation); 
                         break; 
            case "edit" : $laPrestation = $unControleur->selectWherePrestation ($idprestation); 
                break; 
        }
    }

    require_once ("vue/vue_insert_prestations.php");

    if (isset($_POST['Valider'])){
        $unControleur->insertPrestation ($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updatePrestation($_POST);
        //on va actualiser la page 
        header("Location: index.php?page=6");
    }
} // fin du if role 

    if (isset($_POST['Filtrer'])){
        $lesPrestations = $unControleur->selectLikePrestation ($_POST['filtre']);
        $lesServices = $unControleur->selectLikeService($_POST['filtre']);
    } else {
            //recuperation de toutes les Prestations 
            $lesPrestations = $unControleur->selectAllPrestation (); 
            $lesServices = $unControleur->selectAllService();
        }

    require_once ("vue/vue_select_prestations.php");

?>
