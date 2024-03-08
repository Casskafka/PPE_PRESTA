
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
       
       .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 40px;
    font-size: 110%;
    height: 2cm;
    
    background-color: transparent; /* Rendre la barre de navigation transparente */
    position: absolute; /* Position absolue pour empiler l'image en dessous */
    width: 95%; /* Prendre toute la largeur de l'écran */
    top: 0; /* Aligner en haut de la page */
    z-index: 2; /* Mettre la barre de navigation au-dessus des autres éléments */

}

.navbar-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.navbar-links li {
    margin-right: 20px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links a {
    text-decoration: none;
    font-family: Arial, sans-serif;
    
}

.logo img {
    max-height: 60%;
}

.btn-blue {
    background-color: #257CFF; /* Couleur de fond bleue */
    color: #ffffff; /* Couleur du texte blanc */
    padding: 10px 20px; /* Ajustez le padding horizontal et vertical */
    border-radius: 5px; /* Coins arrondis */
    
}

.btn-blue:hover {
    background-color: #2980b9; /* Changement de couleur au survol */
}



 
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="images/lg.png" alt="Logo" height="50">
        </div>
        <ul class="navbar-links">
            
            <li><a href="index.php?page=0" class="btn-blue">Connexion</a></li>
            <li><a href="index.php?page=1" class="btn-blue">Inscription</a></li>
            <li><a href="index.php?page=9" class="btn-blue">Devenir prestataire</a></li>

        </ul>
    </div>
    </nav>
</body>
</html>





<img src="images\bgc.png" alt="" height="750" width="1500" style="border-radius: 20px;">

<img src="images/c.png" alt="" height="140">
<br>
<br>


<img src="images/1 .png" alt=""height="350">
<img src="images/2.png" alt="" height="350">
<img src="images/3.png" alt="" height="440">

<img src="images/p3.png" alt="" height="650">




<style>
    button:hover {
        background-color: #1f69d0; /* Couleur légèrement plus foncée */
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