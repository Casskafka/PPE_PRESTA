
<?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'): ?>
<style>
.card {
    position: relative;
    height: 300px;
    width: 24cm; /* Largeur de la carte */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color:#F9FBFF;
    display: flex; /* Utilisation de Flexbox */
    margin-bottom:30px;
    margin-left:340px;
}

.card-image {
    width: 130px; /* Largeur de l'image */
    height: 130px; /* Hauteur de l'image */
    border-radius: 50%; /* Pour rendre l'image circulaire */
    margin-left: 26px; /* Marge à droite pour l'espacement */
    margin-top: 55px; /* Marge à droite pour l'espacement */
}

.card-content {
    flex-grow: 1; /* Pour que le texte occupe tout l'espace restant */
    padding: 10px;
    margin-left:28px;
    margin-top:25px;
    text-align: left;
}

.card-footer {
    background-color: #f4f4f4;
    padding: 15px;
    text-align: left;
    font-size:15px;
}

form {
    text-align: right; /* Aligner le contenu à droite */
}

/* CSS pour le formulaire de filtre */
form {
    text-align: center; /* Centrer le contenu du formulaire */
    background-color: #257CFF; /* Arrière-plan bleu */
    padding: 20px; /* Espacement intérieur du formulaire */
    border-radius: 5px; /* Coins arrondis */
    margin-top:-35.5px;
}

input[type="text"] {
    padding: 13px;
    width : 6cm;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-left:15px;
}

input[type="submit"] {
    background-color: #fff; /* Couleur de fond blanche */
    color: #257CFF; /* Couleur du texte bleu */
    border: none;
    margin-left:15px;
    padding: 8px 20px;
    border-radius: 5px;
    font-weight : bold ; 
    font-size: 15px;
    cursor: pointer;
    transition: background-color 0.3s; /* Transition pour le changement de couleur au survol */
}

input[type="submit"]:hover {
    background-color: #2980b9; /* Changement de couleur au survol */
    color: #fff; /* Couleur du texte en blanc au survol */
}

.price {
    position: absolute;
    top: 4px;
    right: 15px;
    background-color: #B1EBA2; /* Couleur de fond verte */
    color: #41B425; /* Couleur du texte vert foncé */
    border: none; /* Supprime la bordure */
    border-radius: 5px; /* Coins arrondis */
    font-size:90%;
    font-weight:bold;
    font-family: Arial, sans-serif; 
    padding: 5px 10px; /* Ajustement du rembourrage horizontal et vertical */
}

.card-footer {
    position: absolute;
    top:200px;
    left: 10px;
    background-color: #F9FBFF; /* Blanc */
    border-top: solid, 1 px ;
}

.card-footer p {
    display: inline-block;
    color: #777;
    margin-right: 30px;
}

.qualification {
    position: absolute;
    top: 4px;
    left: 20px;
    color: #257CFF;
    font-weight: bold;
    font-size:12px;
    font-family: Arial, sans-serif; 

    }

.presta{
    position:absolute;
    left:20px;
}
</style>
<?php endif; ?>






<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
   

    
    <table  border="1">
        <tr>
            <th>Nom Client</th>
            <th>Prénom Client</th>
            <th>Email</th>
            <th>Photo de profil</th>
            <th>Mot de passe</th>
            <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
          echo '  <th>Actions</th>';
        }
        ?> 


        </tr>

        <?php

       
        $lesClients = $unControleur->selectAllClients();
        foreach ($lesClients as $unClient) : ?>
            <tr>
                <td><?= $unClient['nom'] ?></td>
                <td><?= $unClient['prenom'] ?></td>
                <td><?= $unClient['email'] ?></td>
                <td><?php
                echo "<img src='uploads/" . $unClient['nom_image'] . "' alt='Image du client'>";
                ?></td>
                <td><?= $unClient['mdp'] ?></td>

                <td>
                    <a href='index.php?page=4&action=sup&idclient=<?= $unClient['idclient'] ?>'><img src='images/supprimer.png' height='30' width='30'></a>
                    <a href='index.php?page=4&action=edit&idclient=<?= $unClient['idclient'] ?>'><img src='images/editer.png' height='30' width='30'></a>
                </td>
            </tr>
            <br>
        <br>
        <br>

        <?php endforeach; ?>
        

    </table>
    <br>
    
    <style>
        table{
            border-collapse: collapse;
            width: 90%;
        }

        th, td {
            border: 1px solid #f4f4f4;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    
<?php endif; ?>






























