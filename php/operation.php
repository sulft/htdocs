<?php 

//on inclut la base de donnée
require_once("db.php");
require_once("component.php");

$con = Createdb(); //retourne notre connexion string

//create button click

if (isset($_POST['create'])/* si il y a une valeur dans ce bouton je veux executer le if */) {
    echo "create button clicked";
}

?>