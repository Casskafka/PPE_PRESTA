<br>
<br>






<?php
$lesServices = $unControleur->selectAllService(); 


    require_once ("vue/vue_inscription_prestataire.php");
     
    if (isset($_POST['Valider'])){
        $unControleur->insertPrestataire($_POST);
    
        header("Location:index.php?page=0");
    }


?>


