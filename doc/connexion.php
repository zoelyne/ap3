<?php
 
try{
 
    $sql = new PDO (
        "mysql:host=localhost;dbname=site_ap;charset=utf8",
        "ZLivre",
        "azerty"
 
    );
}catch(Exeption $e){
    die("Erreur : ".$e->getMessage());
}
 
?>