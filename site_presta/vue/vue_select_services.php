<?php
    if (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
        echo '<img src="images/bga.png" alt="" height="480">';
        echo '<img src="images/l.png" alt="" height="180">';


    }
?>
<br><br><br>
<br><br>





  <form  method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br/>
<?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'): ?>
    <div class="card-container">
        <?php
        if (isset($lesServices)) {
            foreach ($lesServices as $unService) {
                echo "<div class='card'>";
                echo "<img src='uploads/" . $unService['nom_image'] . "' alt='Image du service'>";
                echo "<div class='container'>";
                echo "<p>" . $unService['libelleservice'] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </div>












<br><br>
<br>
<br>

<?php endif; ?>

<?php
    if (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
      echo '<img src="images/c.png" alt="" height=140">';

        echo '<img src="images/m.png" alt="" height=340">';


    }
?>


<br/>
<br/>
<br/>
<?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'): ?>
    <style>
        .card-container {
            text-align: center; 
            margin:10px;
        }

        .card {
            border:none;
            display: inline-block;
            width: 9cm;
            height: 6cm;
            border-radius: 5px;
            overflow: hidden;
            margin-right: 30px; /* Ajoute un espace entre chaque carte */
            margin-bottom: 10px; /* Ajoute un espace entre chaque ligne de cartes */
        }

        .card img {
            width: 100%;
            height: 70%;
        }

        .container {
            font-family: Arial, sans-serif; 
            font-weight: bold;
            text-align: left;
            font-size:120%;
            margin-left:10px;
        }

        form {
            text-align: center; /* Centrer le contenu du formulaire */
        }

        input[type="text"] {
            padding: 13px;
            width: 6cm;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-left: 15px;
        }

        input[type="submit"] {
            background-color: #fff; /* Couleur de fond blanche */
            color: white;
            border: none;
            background-color: #257CFF;
            margin-left: 15px;
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s; /* Transition pour le changement de couleur au survol */
        }

        input[type="submit"]:hover {
            background-color: #2980b9; /* Changement de couleur au survol */
            color: #fff; /* Couleur du texte en blanc au survol */
        }
    </style>



<?php endif; ?>








<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
    <table border="1">
    <thead>
        <tr>
            <th>Opérations</th>
            <th>Libellé du Service</th>
            <th>Image</th> <!-- Ajout de la colonne pour l'image -->
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($lesServices as $unService): ?>
            <tr>
                <td>
                    <a href='index.php?page=3&action=sup&idservice=<?= $unService['idservice'] ?>'><img src='images/supprimer.png' height='30' width='30'></a>
                    <a href='index.php?page=3&action=edit&idservice=<?= $unService['idservice'] ?>'><img src='images/editer.png' height='30' width='30'></a>
                </td>
                <td><?= $unService['libelleservice'] ?></td>
                <td> 
                
                  <img src="uploads\<?= $unService['nom_image'] ?>" height="100">
                    

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    <style>
        table {
            border-collapse: collapse;
            width: 30%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
<?php endif; ?>










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

