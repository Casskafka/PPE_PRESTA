<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Prestataire</title>
</head>
<body>

<div class="card">
    <h1>Inscription Prestataire</h1>
    <form action="" method="post">
        <label for="nom"></label><br>
        <input type="text" id="nomprestataire" name="nomprestataire" placeholder="Votre nom" required><br><br>
        
        <label for="prenom"></label><br>
        <input type="text" id="prenomprestataire" name="prenomprestataire" placeholder="Votre prénom" required><br><br>


        <label for="adresse"></label><br>
        <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" required><br><br>
        
        
        
        <label for="numero_telephone"></label><br>
        <input type="text" id="numero_telephone" name="numero_telephone" placeholder="Votre numéro de téléphone" required><br><br>
        
        <label for="email"></label><br>
        <input type="email" id="email" name="email" placeholder="Votre email" required><br><br>


        <label for="mdp"></label><br>
        <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" required><br><br>
        

        <label for="competences"></label><br>
        <textarea id="competences" name="competences" rows="4" cols="50" placeholder="Décrivez vos compétences" required></textarea><br><br>

        <label for="experience"></label><br>
        <textarea id="experience" name="experience" rows="4" cols="50" placeholder="Décrivez votre expérience" required></textarea><br><br>
        
        <label for="tarifs"></label><br>
        <textarea id="tarifs" name="tarifs" rows="4" cols="50" placeholder="Indiquez vos tarifs" required></textarea><br><br>
        
        <label for="disponibilite"></label><br>
        <input type="text" id="disponibilite" name="disponibilite" placeholder="Vos disponibilités" required><br><br>
        
        <label for="zone_couverture"></label><br>
        <input type="text" id="zone_couverture" name="zone_couverture" placeholder="Votre zone de couverture" required><br><br>
        
        <label for="evaluations"></label><br>
        <textarea id="evaluations" name="evaluations" rows="4" cols="50" placeholder="Vos évaluations" required></textarea><br><br>
        
        <label for="certifications"></label><br>
        <textarea id="certifications" name="certifications" rows="4" cols="50" placeholder="Vos certifications"></textarea><br><br>
        
        <select name="idservice">
            <?php foreach ($lesServices as $unService): ?>
                <option value="<?php echo $unService['idservice']; ?>">
                    <?php echo $unService['libelleservice']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" name="Valider" value="Valider">
    </form>
</div>



</body>
</html>




<style>

body{
        background-image : url(images/flou.png);
    }
 

.card {
    width: 14cm; /* Largeur de la carte */
    height: 20; /* Hauteur de la carte */
    background-color: white;
    padding: 30px; /* Espace à l'intérieur de la carte */
    border: none; /* Bordure de la carte */
    border-radius: 10px; /* Coins arronds de la carte */
    margin: 0 auto; /* Centre la carte horizontalement */
    margin-top: 66px; /* Marge au-dessus de la carte */
    
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3); /* Ombre de la carte */
}

.card h1 {
    text-align: left; /* Alignement du texte à gauche */
    font-family: Arial, sans-serif; /* Police de caractères */
    font-size :250%;
}
.card p {
    text-align: left; /* Alignement du texte à gauche */
    font-family: Arial, sans-serif; /* Police de caractères */
    color: grey;
}


.card form label {
    display: block; /* Affiche chaque label sur une ligne différente */
}

.card form input[type="text"],
.card form input[type="email"],
.card form input[type="password"] {
    width: calc(100% - 30px); /* Largeur des champs de formulaire */
    padding: 11px; /* Espace à l'intérieur des champs de formulaire */
    margin-bottom: -6px; /* Marge en bas de chaque champ */
    background-color: #EBEBEB; /* Couleur de fond des champs */
    border-radius: 10px; /* Coins arrondis */
    border: solid 0.4px; /* Bordure */
    border-color: #3D3C3C; /* Couleur de la bordure */
}

.card form input[type="text"]::placeholder,
.card form input[type="email"]::placeholder,
.card form input[type="password"]::placeholder {
    color: #3D3C3C; /* Couleur du texte de l'indicateur */
    opacity: 0.7; /* Opacité de l'indicateur */
}

.card form input[type="submit"] {
    width: 100%; /* Largeur du bouton */
    margin-top: 2%; /* Marge au-dessus du bouton */
    padding: 10px; /* Espace à l'intérieur du bouton */
    background-color: #257CFF; /* Couleur de fond bleue pour le bouton */
    border: none; /* Supprime la bordure par défaut */
    color: #ffffff; /* Couleur du texte blanc */
    border-radius: 5px; /* Coins arrondis */
}

.card form input[type="submit"]:hover {
    background-color: #1A5CA7; /* Changement de couleur au survol */
}
</style>
