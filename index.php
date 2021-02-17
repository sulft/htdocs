<?php 
    require_once("../projet_vetement/php/component.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetements</title>
    <script src="https://kit.fontawesome.com/3eb397d643.js" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        <?php include "style.css" ?>
    </style>

</head>
<body class='fond'>
    
    <main>
        <div class="container top mt-3 text-center rounded">
            <h1 class="py-5 rounded"><i class="fas fa-tshirt"></i> Magasin de vêtement</h1>
        </div>

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="py-2">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder='Nom de l"article'>
                        <label for="floatingInput">Nom de l'article</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword"  placeholder='Prix en euros' placeholder='$afficher' step="any">
                        <label for="floatingPassword">Prix €</label>
                    </div>
                </div>

                <div class="pt-2">
                    <?php inputElement("Laissez une description ici..",""); ?>
                </div>
            </form>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>