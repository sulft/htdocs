<?php 

//on inclut la base de donnée
require_once("db.php");
require_once("component.php");

$con = Createdb(); //retourne notre connexion string

//create button click

if (isset($_POST['create'])/* si il y a une valeur dans ce bouton je veux executer le if */) {
    createData();
}

function createData() {
    $nomArticle = textboxValue('nomArticle');
    $prix = textboxValue('prix');
    $descrip = textboxValue('text');

    //vérification qu'il y a bien une valeur dans les données ci dessus
    if($nomArticle && $prix && $descrip) {
        $sql = "INSERT INTO vetement (nomArticle,prix,descrip)
        VALUES('$nomArticle','$prix','$descrip')";

        if(mysqli_query($GLOBALS['con'], $sql)) {
            echo "Enregistré avec succès !";
        } else {
            echo "Erreur !";
        }
    } else {
        echo "Ajouter des informations dans tous les champs !";
    }

    //insertion des valeurs dans la base de donnée
}

//spécifier une sécurité contre les sql injection
function textboxValue($value) {
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}
?>