<?php

if(isset($_SESSION['statut']) && $_SESSION['statut']=='client' || $_SESSION['role']=='admin'){
    
    // Récupération des clients, prestataires et services pour les besoins de votre application
     
    $lesPrestataires = $unControleur->selectAllPrestataires();
    $lesServices = $unControleur->selectAllService(); // Modification ici
    $lesPrestations = $unControleur->selectAllPrestation(); 



    $laReservation = null;
    if (isset($_GET['action']) && isset($_GET['idreservation'])) {
        $action = $_GET['action'];
        $idreservation = $_GET['idreservation'];
        switch($action) {
            case "sup":
                $unControleur->deleteReservation($idreservation);
                break;
            case "edit":
                $laReservation = $unControleur->selectWhereReservation($idreservation);
                break;
            case "valid":
                $unControleur->validerReservation("confirme", $idreservation  );
                break;
        }
    }

    if(isset($_SESSION['statut']) && $_SESSION['statut']=='client'){
    require_once ("vue/vue_insert_reservation.php");
    }
    if (isset($_POST['Soumettre'])) {
        // Appel de la méthode pour insérer une nouvelle réservation
        $unControleur->insertReservation($_POST);

    }
    
    if (isset($_POST['Valider'])) {
        // Appel de la méthode pour mettre à jour une réservation
        $unControleur->validerReservation($_POST);
        // Redirection vers une autre page après la modification
        // header("Location: index.php?page=5");
        // exit;
    }
}

    


?>
