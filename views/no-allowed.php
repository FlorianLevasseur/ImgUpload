<?php

    require_once '../my-config.php';
    require_once '../controllers/no-allowed-controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Upload Galerie</title>
</head>

<body>
    <div class="row justify-content-center m-0 p-0 mt-5">
        <div class="col-lg-2 col-6">
            <p class="myTitle">allPIX</p>
            <p class="mb-5">Bonjour, vous n'avez pas les droits nécessaires pour accéder à cette page.</p>
            <div class="text-center">
                <a href="../index.php" class="text-white text-decoration-none h5">Accueil</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/script.js"></script>
</body>

</html>