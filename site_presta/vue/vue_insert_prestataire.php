<h3>Ajout d'un nouveau Prestataire</h3>
 
 
 
<form method="post" class="form-ajout-prestataire">
    <table class="pre">
        <tr>
            <td>Nom du prestataire :</td>
            <td><input type="text" name="nom" value="<?= ($lePrestataire != null) ? $lePrestataire['nom'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Adresse :</td>
            <td><input type="text" name="adresse" value="<?= ($lePrestataire != null) ? $lePrestataire['adresse'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Numéro de téléphone :</td>
            <td><input type="text" name="numero_telephone" value="<?= ($lePrestataire != null) ? $lePrestataire['numero_telephone'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="email" value="<?= ($lePrestataire != null) ? $lePrestataire['email'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Compétences :</td>
            <td><textarea name="competences"><?= ($lePrestataire != null) ? $lePrestataire['competences'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Expérience :</td>
            <td><textarea name="experience"><?= ($lePrestataire != null) ? $lePrestataire['experience'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Tarifs :</td>
            <td><textarea name="tarifs"><?= ($lePrestataire != null) ? $lePrestataire['tarifs'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Disponibilité :</td>
            <td><textarea name="disponibilite"><?= ($lePrestataire != null) ? $lePrestataire['disponibilite'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Zone de couverture :</td>
            <td><textarea name="zone_couverture"><?= ($lePrestataire != null) ? $lePrestataire['zone_couverture'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Evaluations :</td>
            <td><textarea name="evaluations"><?= ($lePrestataire != null) ? $lePrestataire['evaluations'] : '' ?></textarea></td>
        </tr>
        <tr>
            <td>Certifications :</td>
            <td><textarea name="certifications"><?= ($lePrestataire != null) ? $lePrestataire['certifications'] : '' ?></textarea></td>
        </tr>
        <tr>
     <!-- Menu déroulant des services -->
     <tr>
    <td>Service associé :</td>
    <td>
        <select name="idservice">
            <?php foreach ($lesServices as $unService): ?>
                <option value="<?php echo $unService['idservice']; ?>">
                    <?php echo $unService['libelleservice']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </td>
</tr>
 
 
            <td>  </td>
            <td> <input type="reset" name="Annuler" value="Annuler">
                 <input type="submit"
        <?= ($lePrestataire !=null) ? ' name="Modifier" value="Modifier" ' :
                 ' name="Valider" value="Valider" ' ?>
                 >
            </td>
        </tr>
        <?= ($lePrestataire !=null) ? '<input type="hidden" name="idprestataire" value="'.$lePrestataire['idprestataire'].'">'  : '' ?>
    </table>
</form>
 
               
 
<style>
        .pre {
            border-collapse: collapse;
            width: 50%;
        }
 
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
 
        th {
            background-color: #606060;
        }
    </style>
 
 
               
 