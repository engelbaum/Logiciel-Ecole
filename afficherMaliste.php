<?php
require_once('connectionBdEcole.php');
$resultat=$bdd->query('select *from etudiant');
$etudiants=$resultat->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>
<body>
    <table border="1"   width="100%" >
        <tr class="action">
<th>id</th>
<th>Nom</th>
<th>Prenom</th>
<th>Adresse</th>
<th>supprimer</th>
<th>modifier</th>
</tr>
<?php foreach ($etudiants as $key => $etudiant):?>
    <tr class="container">
        <th><?php echo $etudiant['id'];?></th>
        <th><?php echo $etudiant['nom'];?></th>
        <th><?php echo $etudiant['prenom'];?></th>
        <th><?php echo $etudiant['adresse'];?></th>
        <th><a href="supprimer_modifier.php?id=<?=$etudiant['id']?>">supprimer</a></th>
        <th><a href="formulaire.php?id=<?=$etudiant['id']?>">modifier</a></th>
       
    </tr>
<?php endforeach;?>
    </table>
    <a href="formulaire.php">ajouter </a>
</body>
</html>