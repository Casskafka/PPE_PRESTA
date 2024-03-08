<h3> Tableau de bord </h3>
<table border="1">
	<tr>
		<td> Nom étudiant</td>
		<td> Prénom étudiant </td>
		<td> Classe </td>
		<td> Salle </td>
		<td> Matière </td>
	</tr>
	<?php
	if (isset($lesEtudiantsClasses )){
		foreach ($lesEtudiantsClasses as $unEtudiant) {
			echo "<tr>";
			echo "<td>".$unEtudiant['nom']."</td>";
			echo "<td>".$unEtudiant['prenom']."</td>";
			echo "<td>".$unEtudiant['classe']."</td>";
			echo "<td>".$unEtudiant['salle']."</td>";
			echo "<td>".$unEtudiant['matiere']."</td>";
			echo "</tr>";
		}
	}
	?>
</table>