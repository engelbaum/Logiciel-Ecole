<?php
require_once('connectionBdEcole.php');

$id = $_GET['id'] ?? null;
if ($id == null) {
    return header('location:afficherMaliste.php');
    }
$resultat = $bdd->query('delete from etudiant where id=' . $id);
if ($resultat == false) {
    exit('Une erreur sest produit veuillez essayez plus tard !');
}
if ($resultat->rowcount === 0) {
    exit('Enregistrement inconnu !!!');
}
return header('location:afficherMaliste.php');