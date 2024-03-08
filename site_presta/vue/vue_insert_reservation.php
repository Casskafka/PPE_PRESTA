<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'insertion de réservation</title>
</head>
<body>
    
    <h1>Formulaire d'insertion de réservation</h1>
    <form method="post">
        <input type="hidden" name="idclient" value="<?= isset($_SESSION['iduser']) ? $_SESSION['iduser'] : '' ?>">

        <label for="idprestataire">Prestataire associé :</label>
<?php foreach ($lesPrestataires as $unPrestataire): ?>
    <?php 
        // Vérifie si l'identifiant du prestataire dans la boucle correspond à celui passé dans l'URL
        if ($unPrestataire['idprestataire'] == $_GET['idprestataire']) {
            // Stocker l'identifiant du prestataire dans une variable
            $idPrestataire = $unPrestataire['idprestataire'];
            // Stocker le nom complet du prestataire dans une variable
            $nomPrestataire = $unPrestataire['nomprestataire'].' '.$unPrestataire['prenomprestataire'];
            // Afficher le prénom du prestataire dans un champ de texte (non modifiable)
            echo '<input type="text" name="nomprestataire" value="'.$nomPrestataire.'" readonly required>';
            // Créer un champ caché pour l'identifiant du prestataire
            echo '<input type="hidden" name="idprestataire" value="'.$idPrestataire.'">';
            break; // Sort de la boucle une fois que le prestataire est trouvé
        }
    ?>
<?php endforeach; ?>


<label for="idservice">Service associé :</label>
<?php
$lesservices = $unControleur->selectAllService(); // Sélectionner tous les services
foreach ($lesservices as $unservice): ?>
    <?php 
        // Vérifie si l'identifiant du service dans la boucle correspond à celui passé dans l'URL
        if ($unservice['idservice'] == $_GET['idservice']) {
            // Stocker l'identifiant du service dans une variable
            $idService = $unservice['idservice'];
            // Stocker le libellé du service dans une variable
            $nomService = $unservice['libelleservice'];
            // Afficher le libellé du service dans un champ de texte non modifiable
            echo '<input type="text" name="libelleservice" value="'.$nomService.'" readonly required>';
            // Créer un champ caché pour l'identifiant du service
            echo '<input type="hidden" name="idservice" value="'.$idService.'">';
            break; // Sort de la boucle une fois que le service est trouvé
        }
    ?>
<?php endforeach; ?>


<?php 
$lesPrestataires = $unControleur->selectAllPrestataires(); // Sélectionner tous les prestataires
$lesServices = $unControleur->selectAllService(); // Sélectionner tous les services

// Sélectionner les prestations en fonction de l'identifiant du service
$lesPrestations = $unControleur->selectPrestationbyService($_GET['idservice']); 

$optionsPrestations = ''; // Initialisation du tableau d'options

foreach ($lesPrestataires as $unPrestataire) {
    foreach ($lesPrestations as $unePrestation) {
        // Comparer l'identifiant du service du prestataire avec l'identifiant du service de la prestation
        if ($unPrestataire['idservice'] == $unePrestation['idservice']) {
            // Ajouter une option au tableau
            $optionsPrestations .= '<option value="' . $unePrestation['idprestation'] . '">' . $unePrestation['libelleprestation'] . '</option>';
            // Sortir de la boucle dès qu'une prestation est trouvée pour éviter de répéter les options
            break;
        }
    }
}

// Afficher le menu déroulant une fois que toutes les options ont été ajoutées
echo '<label for="prestation">Prestation:</label>
    <select name="idprestation" required>' . $optionsPrestations . '</select>';
?>




        
        <label for="date_reservation">Date de réservation :</label>
        <input type="date" name="date_reservation" id="date_reservation"  min="<?= date('Y-m-d') ?>" value="<?= ($laReservation != null) ? $laReservation['date_reservation'] : '' ?>" required><br><br>
        
        <label for="heure_reservation">Heure de réservation :</label>
        <input type="time" name="heure_reservation" id="heure_reservation" min="08:00" max="20:00"   value="<?= ($laReservation != null) ? $laReservation['heure_reservation'] : '' ?>" required><br><br>

        <?php
        //Affichage du tarif horaire    
            foreach ($lesPrestataires as $unPrestataire) {
                if ($unPrestataire['idprestataire'] == $_GET['idprestataire']) {
                    $tarifpresta = $unPrestataire['tarifs'];

                echo '<label for="tarifs">Tarif horaire:</label>';
                echo '<input type="text" name="tarifs" value="' . $unPrestataire['tarifs'] . '" readonly required><br><br>';
            }
        }

             
                //nb d'heure
               echo' <label for="nbheure">Durée de la Prestation:</label>
                <input type="number" id="nbheure" name="nbheure" required onchange="calculateTariff()"><br><br>



                
            <label for="tarif">Total à régler:</label>
            <input type="text" id="tarif" name="tarif" readonly required>';

        ?>


        
        <label for="commentaire">Commentaire :</label><br>
        <textarea name="commentaire" id="commentaire" rows="4" cols="50"><?= ($laReservation != null) ? $laReservation['commentaire'] : '' ?></textarea><br><br>
        
        <input type="submit" name="<?= ($laReservation != null) ? 'Modifier' : 'Soumettre' ?>" value="<?= ($laReservation != null) ? 'Modifier' : 'Soumettre' ?>">

    </form>
    <? var_dump($_POST) ?>


</body>
</html>






<script>
    // Function to calculate tariff based on the number of hours
    function calculateTariff() {
        // Get the value of the number of hours input
        var nbheure = document.getElementById('nbheure').value;
        // Get the tariff per hour from PHP or from wherever it is defined
        var tariffPerHour = <?php echo  $tarifpresta ?>;
        // Calculate the total tariff
        var totalTariff = nbheure * tariffPerHour;
        // Update the value of the tariff input
        document.getElementById('tarif').value = totalTariff;
    }
</script>





<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* Couleur de fond blanc */
            color: #333; /* Couleur de texte */
        }

        h1 {
            color: #257CFF; /* Couleur bleue */
        }

        form {
            width: 50%; /* Largeur du formulaire */
            margin: auto; /* Centrer le formulaire */
            padding: 20px; /* Espacement intérieur */
            background-color: #f4f4f4; /* Couleur de fond gris clair */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
        }

        label {
            font-weight: bold; /* Texte en gras */
            color: #257CFF; /* Couleur bleue */
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select,
        textarea {
            width: 100%; /* Largeur à 100% */
            padding: 10px; /* Espacement intérieur */
            margin-bottom: 10px; /* Marge en bas */
            border: 1px solid #ddd; /* Bordure gris clair */
            border-radius: 5px; /* Coins arrondis */
            box-sizing: border-box; /* Boîte de modèle */
        }

        textarea {
            height: 100px; /* Hauteur du champ de texte */
        }

        input[type="submit"] {
            background-color: #257CFF; /* Couleur de fond bleue */
            color: #fff; /* Couleur de texte blanc */
            border: none; /* Pas de bordure */
            padding: 10px 20px; /* Espacement intérieur */
            border-radius: 5px; /* Coins arrondis */
            cursor: pointer; /* Curseur de type pointer */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Couleur de fond bleue foncée au survol */
        }
    </style>


    <script>



    </script>