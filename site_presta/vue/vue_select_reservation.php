<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
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
</head>
<body>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
    <table>
        <thead>
            <tr>
                <th>ID Réservation</th>
                <th>ID Client</th>
                <th>ID Prestataire</th>
                <th>Le service</th>
                <th>Date Réservation</th>
                <th>Heure Réservation</th>
                <th>État</th>
                <th>Commentaire</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lesreservations as $uneReservation): ?>
                <tr>
                    <td><?php echo $uneReservation['idreservation']; ?></td>
                    <td><?php echo $uneReservation['idclient']; ?></td>
                    <td><?php echo $uneReservation['idprestataire']; ?></td>
                    <td><?php echo $uneReservation['idservice']; ?></td>
                    <td><?php echo $uneReservation['date_reservation']; ?></td>
                    <td><?php echo $uneReservation['heure_reservation']; ?></td>
                    <td><?php echo $uneReservation['etat']; ?></td>
                    <td><?php echo $uneReservation['commentaire']; ?></td>
                    <td>
                        <a href='index.php?page=7&action=sup&idreservation=<?= $uneReservation['idreservation'] ?>'><img src='images/supprimer.png' height='30' width='30'></a>
                        <a href='index.php?page=7&action=valid&idreservation=<?= $uneReservation['idreservation'] ?>'>Valider</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>





























<style>

.carre {
    border-radius: 10px;

    position: absolute;
    top: 29.5%;
    left: 19%;
    width: 32%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Ajoute une ombre portée plus légère */

    height: 65%;
    background-color: #F9FBFf; /* Couleur blanche */
    z-index: -1; /* Pour placer le carré derrière tout le contenu */
}




.profile-card {
    position: absolute;
    left: 35%; 
    top: 62%; /* Positionnement vertical au milieu */
    transform: translate(-50%, -50%); /* Pour centrer l'élément par rapport à son point de référence */
    width: 400px;
    height:400px;
    background-color: #F9FBFF;
    border-radius: 10px;
    padding: 20px;
}

        .profile-card h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .profile-form {
            text-align: center;
        }

        .profile-form input[type="file"] {
            margin-bottom: 10px;
        }

        .profile-form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .profile-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-image img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }







    .btn-contact {
    margin-left:72%;
    margin-bottom:1%;
    background-color: #007bff;
    color: #fff;
    padding: 12px 20px;
    border-radius: 5px;
    border:none;
    text-decoration: none;
}
.btn-contact:hover {
    background-color: #0056b3;
}

        body {
            font-family: Arial, sans-serif;
        }

        .reservation-container {
    display: flex;
    flex-direction: column; /* Affichage des cartes en colonnes */
    align-items: center; /* Alignement des cartes au centre horizontalement */
}
 

.card {
    border-radius: 5px;
    padding: -8px;
    width: 280px;
    display: flex;
    flex-direction: column;
    width: 30%; /* Largeur de la carte */
    height:auto;
    background-color: #F9FBFF; /* Couleur de fond gris clair */
    border-radius: 10px; /* Coins arrondis */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 10px; /* Déplacez cette propriété ici ou supprimez-la si elle n'est pas nécessaire */
    margin-left: 550px; /* Positionnement à 70px de la gauche */
}



       

        .card-header {
            font-weight: bold;
            margin-bottom: 5px;
            color: #257CFF;
        }

        .card-content {
            margin-bottom: 1px;
            text-align:left;
            margin-left:20px;
            font-size: 13px;

        }

        .card-content p {
            color: #333; /* Couleur du texte */
            text-align:left;

        }

        .card-footer {
            font-style: italic;
            color: #666;
            margin-top: auto;
            text-align:left;
            margin-left:20px;


        }



        
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


.textres{
    position: absolute ;
    top: 46%;
    left: 64%
}
    </style>
</head>
<?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'): ?>
    <div class="carre"></div>
 
    <!-- Afficher le contenu seulement si l'utilisateur n'est pas un administrateur -->
    <body>

        <div class="profile-card">
            <h2>Votre profil</h2>
            <div class="profile-image">
                <!-- Afficher la photo de profil ici -->
                <?php
                $lesClients = $unControleur->selectAllClients();
                    foreach ($lesClients as $unClient) {
                    if ($unClient['idclient'] == $_SESSION['iduser']) {
                        echo "<img src='uploads/" . $unClient['nom_image'] . "' alt='Image du service'>";
                        break;
                     }
                    
                    } 
                     
               

                        ?>
            </div>
            
            <form class="profile-form" method="post" enctype="multipart/form-data">
                <input type="file" name="nom_image">

                <input type="submit" name="Ajouter" value="Ajouter">

         
                
            </form>

            <div class="session-info">
                <!-- Afficher les informations de session ici -->
                <?php if (isset($_SESSION['nom'])): ?>
                    <h3><?= $_SESSION['nom']." ". $_SESSION['prenom'] ?></h3>
                <?php endif; ?>
                
                
            </div>
        </div>

        <h1 style="color:#007bff;">Mes réservations kk</h1>
        <br>
        <br>
        <br>

<div class="reservation-wrapper">
    <?php 

    
 if (empty($lesreservations)) {
        echo '<div class="textres">
        <img src="images/cal.png" alt="Recherche" height="50">
        <p>Vous n\'avez pas encore de reservation</p>
        <p>Lorsque vous effectuez des réservations, <br>
         vous pouvez les voir ici.</p>
         <a href="index.php?page=5">Commencer à chercher des prestataires</a>
         </div>'; 
    }
     else { ?>
        <div class="reservation-container">
            <?php foreach ($lesreservations as $uneReservation): ?>
                <?php if ($uneReservation['idclient'] == $_SESSION['iduser']): ?>
                    <div class="card">
                        <div class="card-content">
                            <p style="font-size: 20px;"><strong><?php echo $uneReservation['nomprestataire']; ?></strong></p>
                            <p><strong>Service réservé :</strong> <span style="background-color: #FFF1B8; padding: 2px 5px; border-radius: 5px;"><?php echo $uneReservation['libelleservice']; ?></span></p>
                            <p>Date : <?php echo $uneReservation['date_reservation']; ?></p>
                            <p>Heure : <?php echo $uneReservation['heure_reservation']; ?></p>
                        </div>
                        <div class="card-footer"><strong>Statut :</strong> <?php echo $uneReservation['etat']; ?></div>
                        <div class="card-footer">
                         <?php 
                        if ($uneReservation['etat'] == 'confirme') {
                                echo '<button class="btn-contact" onclick="toggleMessage(this)">Contacter</button>';
                                echo '<div class="message" style="display: none;">' . $uneReservation['numero_telephone'] . '</div>';
                            }
                            ?>
                        </div>
                        <br>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php } ?>
</div>

            </div>
        </div>

        <script>
            function toggleMessage(button) {
                var message = button.parentNode.querySelector('.message');
                message.style.display = message.style.display === 'none' ? 'block' : 'none';
            }
        </script>
    </body>
<?php endif; ?>




<?php
if(isset($_FILES['nom_image']) && $_FILES['nom_image']['error'] == 0) {  
    $error = 1;
    if ($_FILES['nom_image']['size'] <= 3000000) {
        $informationsImage = pathinfo($_FILES['nom_image']['name']);
        $extensionImage = $informationsImage['extension'];
        $extensionsArray = array('png', 'gif', 'jpg', 'jpeg'); 

        if(in_array($extensionImage, $extensionsArray)) {
            // Utilisez le nom d'origine de l'image pour éviter d'écraser les fichiers
            $address = 'uploads/' . $_FILES['nom_image']['name'];
            move_uploaded_file($_FILES['nom_image']['tmp_name'], $address); 
            $error = 0;
            echo 'Envoi bien réussi !';
        }
    }
}
?>












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
<br>
<br>
<br>
<?php          var_dump($lesPrestations);
?>


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



