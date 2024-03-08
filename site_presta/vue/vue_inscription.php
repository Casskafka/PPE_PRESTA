<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Client</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<div class="card">
    <h1>Créer un compte</h1>
    <p>Profitez de votre temps libre grâce à nos jobbers</p>
    <form action="" method="post">
        <label for="nom"> </label><br>
        <input type="text" id="nom" name="nom" placeholder="Votre nom" required><br><br>
        
        <label for="prenom"></label><br>
        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required><br><br>
        
        <label for="email"></label><br>
        <input type="email" id="email" name="email" placeholder="Votre email" required><br><br>
        
        <!--<label for="adresse"></label><br>
        <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" required><br><br>
-->
        <label for="mot_de_passe"></label><br>
        <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" required><br><br>
        
        <input type="submit" name="Sinscrire" value="S'inscrire">
    </form>
</div>



<style>


       
      
body {
    background-image: url("images/bgcflou.png");
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

</body>
</html>