<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
<?php
include "connexion.php";
 
$req = $sql->prepare("select * from site_ap");
$req->execute();
$tabs = $req->fetchAll();
?>
<table border="1">
    <tr>
        <th>isbn</th>
        <th>titre</th>
        <th>prix</th>
    </tr>
<?php
foreach($tabs as $tab){
?>
<tr>
    <td><?php echo $tab["nom_produit"];  ?></td>
    <td><?php echo $tab["titreLivre"];  ?></td>
    <td><?php echo $tab["prix"];  ?></td>
    <td><a href="deleteLivre.php?id=<?php echo $tab["isbnLivre"];?>">Supprimer</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>