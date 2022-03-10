<?php
require_once('connectionBdEcole.php');
$id = $_GET['id'] ?? null;

if ($id != null) {
    echo $id;
};

$etudiant = null;
if ($id != null) {
    $resultat = $bdd->query('select *from etudiant where id='.$id);
    $etudiant = $resultat->fetch(PDO::FETCH_ASSOC);
    $url = '?id=' . $id;
} else {
    $url = '';
}


?>






<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <form action="sauvegarde.php<?= $url ?>" method="POST">
        <input type="text" name="nom" value="<?= $etudiant['nom'] ?? '' ?>" placeholder="Nom"><br>
        <input type="text" name="prenom" value="<?= $etudiant['prenom'] ?? '' ?>" placeholder="Prenom"><br>
        <input type="text" name="adresse" value="<?= $etudiant['adresse'] ?? '' ?>" placeholder="Adresse"><br>
        <button type="submit" value="">Enregistrer</button>
    </form>
</body>

</html>