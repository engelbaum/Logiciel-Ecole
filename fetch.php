<?php
/*require_once('connectionBdEcole.php');
$reponse=$bdd->query('select*from etudiant');

echo'<table>';
echo '<tr>';
echo'<td>id</td><td>nom</td><td>prenom</td><td>adresse</td>';
while ($donnees=$reponse->fetch()) {
    echo $donnees['nom'];
}
echo'</tr>';
echo'</table>';