<?php
require_once('connectionBdEcole.php');
$id = $_GET['id'] ?? null;
//echo '<pre>';
//print_r($_POST);
if (!isset($_POST['nom']) or empty($_POST['nom'])) {
    echo 'le nom est obligé';
    echo '<a href="formulaire.php">Retour au Formulaire</a>';
}elseif (!isset($_POST['prenom']) or empty($_POST['prenom'])) {
    echo 'le prenom est obligé';
    echo '<a href="formulaire.php">Retour au Formulaire</a>';
}elseif (!isset($_POST['adresse']) or empty($_POST['adresse'])) {
    echo 'l\'adresse est obligé';
    echo '<a href="formulaire.php">Retour au Formulaire</a>';
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
if ($id != null) {
    $resultat = $bdd->query("update etudiant set nom='$nom',prenom='$prenom',adresse='$adresse' where id=$id");
}else{

$resultat=$bdd->query("insert into etudiant(nom,prenom,adresse)values ('$nom','$prenom','$adresse')" );
}
return header('location:afficherMaliste.php');