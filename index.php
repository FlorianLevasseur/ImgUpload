<?php

    require_once 'my-config.php';
    require_once 'controllers/index-controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Upload Galerie</title>
</head>

<body>
    <div class="row justify-content-center m-0 p-0 mt-5">
        <div class="col-lg-2 col-8">
            <p class="myTitle">allPIX</p>
            <form method="POST">
                <div>
                    <label for="login">Login</label>
                </div>
                <div>
                    <input class="form-control myBtn" type="text" name="login" id="login">
                </div>
                <div>
                    <label for="password">Password</label>
                </div>
                <div>
                    <input class="form-control myBtn" type="password" name="password" id="password">
                </div>
                <div class="text-center mt-3">
                    <input class="btn btn-light myBtn" type="submit" id="submit" name="submit" class="mt-2" value="Connexion">
                </div>
                <div class="textAlert">
                    <?= $arrayErrors['login'] ?? '' ?>
                    <?= $arrayErrors['password'] ?? '' ?>
                    <?= $success ?? '' ?>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
</body>

</html>