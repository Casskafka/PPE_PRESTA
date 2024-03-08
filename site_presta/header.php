      
	

<div class="navbar">

<a href="index.php?page=2">
    <img src="images/lg.png" height="50" >
</a>
<ul class="navbar-links">
    <li><a href="index.php?page=3">Les Services</a></li>
<?php    if (isset($_SESSION['role']) && $_SESSION['role'] == "admin" || $_SESSION['role'] == "prestataire") {
        echo '<li><a href="index.php?page=4">Les clients</a></li>';
        echo '<li><a href="index.php?page=6">Les Prestations</a></li>';
    }
    echo '
    <li><a href="index.php?page=5">Les prestataires</a></li>
    
    <li><a href="index.php?page=7">Mes reservations</a></li>




    <li><a href="index.php?page=10" class="btn-blue">Déconnexion</a></li>
</ul>
</div>
    ';
    ?>