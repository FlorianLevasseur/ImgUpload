<?php

require_once '../my-config.php';
require_once '../controllers/gallery-controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/lightbox.css">
    <title>Upload Galerie</title>
</head>

<body>
    <div class="row justify-content-center m-0 p-0 mt-5">
        <?php
        if (!empty($_SESSION)) { ?>
            <div class="col-8">
                <p class="myTitle">allPIX</p>
                <p class="mb-5">Bonjour, <?= $_SESSION['login'] ?></p>
                <div class="row" data-masonry='{"percentPosition": true }'>
                    <?php
                    $array_scan = scandir("../img");
                    foreach ($array_scan as $value) {
                        $array_name = explode("-", $value);
                        $pref = reset($array_name);
                        if ($pref == $_SESSION['login']) { ?>
                            <div class="col-lg-4 col-6">
                                <div>
                                    <a href="../img/<?= $value ?>" data-lightbox="allImages"><img class="img-fluid mb-3" src="../img/<?= $value ?>"></a>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
                <div class="mt-5 text-center">
                    <a class="text-white text-decoration-none h5" href="dashboard.php">Dashboard</a>
                </div>

            </div>
        <?php } else {
            header('Location: no-allowed.php');
        } ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/script.js"></script>
    <script src="../assets/lightbox-plus-jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>

</html>