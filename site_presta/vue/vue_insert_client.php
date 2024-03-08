<h3> Ajout d'un nouveau Client </h3>
<form method="post">
	<table>
		<tr>
			<td> Nom du Client : </td>
			<td> <input type="text" name="nom" 
value="<?= ($leClient !=null) ? $leClient['nom'] : '' ?>"
				></td>
		</tr>
		<tr>
			<td> Prénom : </td>
			<td> <input type="text" name="prenom"
value="<?= ($leClient !=null) ? $leClient['prenom'] : '' ?>"
				></td>
		</tr>
		<tr>
			<td> Email : </td>
			<td> <input type="text" name="email"
value="<?= ($leClient !=null) ? $leClient['email'] : '' ?>"
				></td>
		</tr>

		

		<tr>
			<td> Photo de Profil : </td>
			 
              <td><input type="file" name="nom_image"> </td>  

            </td>
        </tr>

		<tr>
			<td> Mot de Passe : </td>
			<td> <input type="password" name="mdp"></td>
		</tr>
		
			<td>  </td>
			<td> <input type="reset" name="Annuler" value="Annuler">
				 <input type="submit" 
		<?= ($leClient !=null) ? ' name="Modifier" value="Modifier" ' :
				 ' name="Valider" value="Valider" ' ?>
				 >
			</td>
		</tr>
		<?= ($leClient !=null) ? '<input type="hidden" name="idclient" value="'.$leClient['idclient'].'">'  : '' ?>
	</table>
</form>












