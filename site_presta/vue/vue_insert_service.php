<h3> Ajout d'un nouveau service </h3>

<form method="post" class="service-form" enctype="multipart/form-data">
    <table class="table-service">
        <tr>
            <td> Image :</td>
            <td> 
                <input type="file" name="nom_image">

            </td>
        </tr>
        <tr>
            <td> Service :</td>
            <td> <input type="text" name="libelleservice" value="<?= ($leService != null) ? $leService['libelleservice'] : '' ?>"> </td>
        </tr>
        <tr>
            <td>  </td>
            <td> 
                <input type="reset" name="Annuler" value="Annuler">
                <input type="submit" <?= ($leService != null) ? 'name="Modifier" value="Modifier" ' : 'name="Valider" value="Valider" ' ?>>
            </td>
        </tr>
    </table>
</form>







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

