<?php
try{
    $bdd = new PDO("mysql:host=localhost;dbname=site_ap;charset=utf8", "zoelyne", "1234");
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}
?>