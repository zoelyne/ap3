<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
<?php
include "connexion.php";
 
$req = $bdd->prepare("select * from produit");
$req->execute();
$tabs = $req->fetchAll();
?>
<table border="1">
<?php
foreach($tabs as $tab){
?>
<tr>
    <td><?php echo $tab["nom_produit"];?></td>
    <td><img src="images/<?php echo ($tab['imgproduit'])?>;"></td>
    <td><?php echo $tab["prix"];  ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>