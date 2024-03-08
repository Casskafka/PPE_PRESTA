
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
            <th>Nom Prestataire</th>
            <th>Adresse</th>
            <th>Numéro de téléphone</th>
            <th>Email</th>
            <th>Compétences</th>
            <th>Expérience</th>
            <th>Tarifs</th>
            <th>Disponibilité</th>
            <th>Zone de couverture</th>
            <th>Service associé</th>
            <th>Action</th>
        </tr>
        <?php foreach ($lesPrestataires as $unPrestataire) : ?>
            <tr>
                <td><?= $unPrestataire['nomprestataire'] ?></td>
                <td><?= $unPrestataire['adresse'] ?></td>
                <td><?= $unPrestataire['numero_telephone'] ?></td>
                <td><?= $unPrestataire['email'] ?></td>
                <td><?= $unPrestataire['competences'] ?></td>
                <td><?= $unPrestataire['experience'] ?></td>
                <td><?= $unPrestataire['tarifs'] ?></td>
                <td><?= $unPrestataire['disponibilite'] ?></td>
                <td><?= $unPrestataire['zone_couverture'] ?></td>
                <td><?= $unPrestataire['libelleservice'] ?></td>
                <td>
                    <a href='index.php?page=5&action=sup&idprestataire=<?= $unPrestataire['idprestataire'] ?>'><img src='images/supprimer.png' height='30' width='30'></a>
                    <a href='index.php?page=5&action=edit&idsprestataire=<?= $unPrestataire['idprestataire'] ?>'><img src='images/editer.png' height='30' width='30'></a>
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








<br>



<form method="post">
    <input type="text" name="filtre_ville" placeholder="Ville">
    <input type="text" name="filtre_service" placeholder="Service">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>



<?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') : ?>
    <br>
    <br>
    <br>
    <br>


    <div class="carddesservices">
  <div class="card-header">
    <h2>Nos services</h2>
  </div>
  <div class="card-body">
    <ul>
    <?php
        if (isset($lesServices)) {
            foreach ($lesServices as $unService) {
                echo "<tr>";
                echo "<p>" . $unService['libelleservice'] . "</p>";
                echo "</tr>";
            }
        }
        ?>    </ul>
  </div>
</div>

















    <div class="card-container">
        <?php if (isset($lesPrestataires)) : ?>
            <?php foreach ($lesPrestataires as $unPrestataire) : ?>
                <div class="card">
                    <img class="card-image" src="images/profilvide.jpg" alt="">
                    <div class="card-content">
                        <h3 style="font-family: Arial, sans-serif; color: #333; font-weight:bold;"><?= $unPrestataire['nomprestataire'] ?></h3>
                        <p style="font-family: Arial, sans-serif; color: #333;"><?= $unPrestataire['competences'] ?></p>
                        <p><strong>Expérience :</strong> <?= $unPrestataire['experience'] ?></p>
                        
                            <input type="hidden" name="id_prestataire" value="<?= $unPrestataire['idprestataire'] ?>">
                            <a href="index.php?page=8&idprestataire=<?= $unPrestataire['idprestataire'] ?>&idservice=<?= $unPrestataire['idservice'] ?>">
    <button type="button" class="reservation-btn">Réserver</button>
</a>


                      
                        <p class="price"><strong></strong> <?= $unPrestataire['tarifs'] ?></p>
                        <div class="card-footer">
                            <p><img src="images/disp.png" alt="Logo de disponibilité" height="15"> Disponibilité : <?= $unPrestataire['disponibilite'] ?></p>
                            <p><img src="images/loc.png" height="15"> Zone de couverture : <?= $unPrestataire['zone_couverture'] ?></p>
                            
                            <p>
    <strong>
        <img src="images/et.png" height="20">
    </strong>
    <?= $unPrestataire['libelleservice'] ?>
</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>






<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <h2>À propos de nous</h2>
      <p>Nous sommes une entreprise dédiée à fournir des services de haute qualité à nos clients. Notre mission est de satisfaire vos besoins et de vous offrir une expérience exceptionnelle.</p>
    </div>
    <div class="footer-section contact">
      <h2>Contactez-nous</h2>
      <p><i class="fas fa-phone"></i> +123 456 789</p>
      <p><i class="fas fa-envelope"></i> info@example.com</p>
    </div>
    
  </div>
  <div class="footer-bottom">
    &copy; 2024 Nom de votre entreprise. Tous droits réservés.
  </div>
</footer>

</body>
</html>

<style>

/* Styles pour le footer */
.footer {
	margin-top:70px;
  background-color: black; /* Couleur de fond */
  color: #fff; /* Couleur du texte */
  padding: 50px 0; /* Espacement intérieur en haut et en bas */
}

/* Styles pour la section de contenu */
.footer-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

/* Styles pour chaque section du footer */
.footer-section {
  width: 30%; /* Largeur de chaque section */
  padding: 0 20px; /* Espacement intérieur */
}

/* Styles pour les titres des sections */
.footer-section h2 {
  color: #fff; /* Couleur du texte */
  font-size: 20px;
  margin-bottom: 20px; /* Espacement en bas */
}


/* Styles pour le bas du footer */
.footer-bottom {
  text-align: center; /* Alignement du texte au centre */
  margin-top: 30px; /* Espacement en haut */
  padding-top: 10px; /* Espacement intérieur en haut */
  border-top: 1px solid #666; /* Bordure supérieure */
}



</style>















<style>





.carddesservices {

 background-color:#F9FBFF;
 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
 border-radius: 10px;


  width: 6cm;
  position: absolute;
  left:170px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin: 10px;
}

.carddesservices .card-header {
  background-color: #F9FBFF;
  font-family: Arial, sans-serif; 

  padding: 10px;
  border-bottom: 1px solid #EDEFF4;
}

.carddesservices .card-header h2 {
  margin: 0;
}

.carddesservices .card-body {
  padding: 10px;
  font-family: Arial, sans-serif; 
  text-align: left; /* Alignement à gauche */
  margin-left:22px;



}

.carddesservices .card-body ul {
  margin: 0;
  padding: 0;
}

.carddesservices .card-body ul li {
  list-style-type: none;
  margin-bottom: 5px;
}










    .reservation-btn {
        position:absolute;
        top:240px;
        left:720px;
        background-color: #257CFF;
        color: white;
        font-size:16px;
        padding: 10px 40px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .reservation-btn:hover {
        background-color: darkblue;
    }


    
</style>




