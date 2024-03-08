<?php
    if (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
        echo '<img src="images/bga.png" alt="" height="480">';
    }
?>

<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br/>

<table border="1">
    <thead>
        <tr>
            <th>Prestation</th>
            <th>Service</th>
            <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    echo '<th>Actions</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>

        <?php
        
            if (isset($lesPrestations)) {
              $lesPrestations = $unControleur->selectAllPrestation();
                foreach ($lesPrestations as $unePrestation) {
                    echo "<tr>";
                    echo "<td>" . $unePrestation['libelleprestation'] . "</td>";
                    echo "<td>" . $unePrestation['libelleservice'] . "</td>"; // Ajout de la colonne pour le service

                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                        echo "<td>";
                        echo "<a href='index.php?page=6&action=sup&idprestation=".$unePrestation['idprestation']."'><img src='images/supprimer.png' height='30' width='30'></a>"; 
                        echo "<a href='index.php?page=6&action=edit&idprestation=".$unePrestation['idprestation']."'><img src='images/editer.png' height='30' width='30'></a>";
                        echo "</td>";
                    }

                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>

</table>


<style>
        table {
            border-collapse: collapse;
            width: 50%;
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