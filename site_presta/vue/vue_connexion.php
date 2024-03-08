<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="card">
        <h1>Content de vous revoir !</h1>
        <p>Connectez-vous pour accéder à votre compte
</p>
        <form method="post">
            <label></label>
            <input type="email" name="email"  placeholder="Email">
 <br>
            <label></label>
            <input type="password" name="mdp" placeholder="Mot de passe"><br><br>
            <label></label>
            <select name="statut">
                <option value="client">Client</option>
                <option value="user">User</option>
                <option value="prestataire">Prestataire</option>
            </select><br><br>
            <input type="reset" name="Annuler" value="Annuler">
            <input type="submit" name="Connexion" value="Connexion">
            <div class="membership-info">
    <p class="membership-message">Pas encore membre ?</p>
    <p class="membership-link"><a href="index.php?page=1">Inscrivez-vous</a></p>
</div>

            <p></p>
        </form>
    </div>
</body>
</html>

<style>

body {
    background-image: url("images/bgcflou.png");
}


    .card {
    width: 14cm; /* Largeur de la carte */
    height: 12.5cm; /* Hauteur de la carte */
    background-color: white;
    padding: 30px; /* Espace à l'intérieur de la carte */
    border: none; /* Bordure de la carte */
    border-radius: 10px; /* Coins arronds de la carte */
    margin: 0 auto; /* Centre la carte horizontalement */
    margin-top: 66px; /* Marge au-dessus de la carte */
    
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3); /* Ombre de la carte */

}

.card h1  {
    text-align: left; /* Centre le titre de la carte */
    font-family: Arial, sans-serif; 
}

.card p  {
    text-align: left; /* Centre le titre de la carte */
    color: #777777;
    margin-top: -18px;
    margin-bottom:10%;
    font-family: Arial, sans-serif; 

}

.card form label {
    display: block; /* Affiche chaque label sur une ligne différente */
}


.card form input[type="email"],
.card form input[type="password"] {
    width: calc(100% - 26px); /* Largeur des champs de formulaire */
    padding: 11px; /* Espace à l'intérieur des champs de formulaire */
    margin-bottom: 18px; /* Marge en bas de chaque champ */
    background-color: #ffffff; /* Gris */
    border-radius:10px;
    border : solid 1px;
    border-color:#555 ;

}

.card form select {
    width: calc(100% - 270px); /* Largeur des champs de formulaire */
    padding: 11px; 
    border-radius:10px;
    margin-top: -19px;

}


.card form input[type="email"]::placeholder {
    color: #555; /* Couleur du texte de l'indicateur */
    opacity: 0.7; /* Opacité de l'indicateur */
}

.card form input[type="password"]::placeholder {
    color: #555; /* Couleur du texte de l'indicateur */
    opacity: 0.7; /* Opacité de l'indicateur */
}

.card form input[type="submit"],
.card form input[type="reset"] {
    width: 100%; /* Largeur des boutons */
    margin-top: 2%;
    padding: 10px; /* Espace à l'intérieur des boutons */
    background-color: #257CFF; /* Couleur de fond bleue pour les boutons */
    border: none; /* Supprime la bordure par défaut */
    color: #ffffff; /* Couleur du texte blanc */
    border-radius: 5px; /* Coins arrondis */
}

.card form input[type="submit"]:hover,
.card form input[type="reset"]:hover {
    background-color: #1A5CA7; /* Changement de couleur au survol */
}

.membership-info {
    display: flex;
    align-items: center;
    text-align:center;
    margin-top:10%;
}

.membership-message {
    color: #777777; /* Couleur de texte gris */
    margin-left:120px; /* Marge à droite */
    margin-right:20px; /* Marge à droite */

}

.membership-link a {
    text-decoration: none;
    color: #257CFF; /* Couleur de texte bleu pour le lien */
}


</style>