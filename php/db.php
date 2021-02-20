<?php 
/* Création d'une base de donnée en utilisant un php script.

Avantage ? 
quand je clone pas besoin de crée un php manuellement et de crée une nouvelle table.
Au lieu de ça en utilisant un script, on va crée automatiquement une base de donnée 
avec une nouvelle table

*/

function Createdb() {
    $servename = "localhost";
    $username = "root";
    $password = "";
    $dbname = "magasinVetement";

    //création d'une connexion mysql
    $con = mysqli_connect(
        $servename,
        $username,
        $password
    );

    //tchek de la connexion
    if(!$con){
        die("Echec de la connexion : " . mysqli_connect_error()); //envoie un message d'erreur en cas d'échec

    }

    //création de la base de donnée 

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname"; //Cette phrase va crée une base de donnée dans mon sqli base de donnée
    
    //Pour éxécuter la commande juste au dessus
    if(mysqli_query($con,$sql)) {
        //utilisé la base de donnée
        $con = mysqli_connect(
            $servename,
            $username,
            $password,
            $dbname
        );

        //crée la table
        $sql = "
            CREATE TABLE IF NOT EXISTS vetement (
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name varchar(35) NOT NULL,
                prix FLOAT,
                texte TEXT
            );
        ";

        if(mysqli_query($con,$sql)) {
            return $con;
        } else {
            echo "Impossible de crée la table";
        }

    } else {
        echo 'Erreur lors de la création de la base de donnée ' . mysqli_error($con);
    }
}

 
?>