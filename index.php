<?php 
    require_once("../projet_vetement/php/component.php");
    require_once("../projet_vetement/php/db.php");
    require_once('../projet_vetement/php/operation.php');

    Createdb(); /*si erreur Warning: mysqli_connect(): (HY000/1049): Unknown database 'magasinvetement' in C:\xampp\htdocs\projet_vetement\php\db.php on line 22
    Echec de la connexion : Unknown database 'magasinvetement'*/
    // dans db.php retiré le 4e arguement de mysqli_connect

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetements</title>
    <script src="https://kit.fontawesome.com/3eb397d643.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        <?php include "style.css" ?>
    </style>

</head>
<body class='fond'>
    
    <div class="container">
        <main>
            <div class="top mt-3 text-center rounded">
                <h1 class="py-5 rounded"><i class="fas fa-tshirt"></i> Magasin de vêtement</h1>
            </div>

            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <!-- ensemble des forms -->
                    <div class="py-2">
                        <div class="form-floating mb-3">
                            <input type="text" name='nomArticle' class="form-control" id="floatingInput" placeholder='Nom de l"article'>
                            <label for="floatingInput">Nom de l'article</label>
                        </div>

                        <div class="form-floating">
                            <input type="number" min=0 class="form-control" id="floatingPassword" name='prix' placeholder='Prix en euros' placeholder='$afficher' step="any">
                            <label for="floatingPassword">Prix €</label>
                        </div>
                    </div>
                    <div class="pt-2">
                        <?php textElement("text","Laissez une description ici..",""); ?>
                    </div>

                    <!-- ensemble des boutons -->
                    <div class='d-flex justify-content-center'>
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","") ?>

                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","") ?>

                        <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","") ?>

                        <?php buttonElement("btn-delete","btn btn-danger border","<i class='fas fa-trash-alt'></i>","delete","") ?>
                    </div>
                    
                </form>
            </div>

            <!-- tableau de bootstrap -->

            <div class='d-flex table-data'>
                <table class="table table-striped rounded blue ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Description</th>
                            <th>Editer</th>
                        </tr>
                    </thead>
                    <tbody class="blue1">
                        <tr>
                            <td class='text-light'>1</td>
                            <td class='text-light'>Pantalon Nike</td>
                            <td class='text-light'>44.99</td>
                            <td class='text-light'>Pantalon super pour l'été</td>
                            <td><i class='fas fa-edit btnedit'></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>