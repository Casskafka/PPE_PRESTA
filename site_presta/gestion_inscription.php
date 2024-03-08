<?php
    require_once ("vue/vue_inscription.php");
     
    if (isset($_POST['Sinscrire'])){
        $unControleur->insertClient ($_POST);
        header("Location:index.php?page=0");
    }


?>
