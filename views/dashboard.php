<?php

require_once '../my-config.php';
require_once '../controllers/dashboard-controller.php';

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
        <?php
        if (!empty($_SESSION)) { ?>
            <div class="col-lg-2 col-8">
                <p class="myTitle">allPIX</p>
                <p class="mb-4">Bonjour, <?= $_SESSION['login'] ?></p>
                <p class="mb-0"><b>Quota</b> : <?= $quota ?> / <?= $quotaMax ?> Mo</p>
                <p class="mb-5"><b>Total image(s)</b> : <?= $nbPictures ?></p>
                
                    
                        <?php
                        if (empty($_POST['submitUpload'])) { ?>
                            <form method="POST">
                                <input class="form-control btn btn-light myBtn" type="submit" id="submitUpload" name="submitUpload" value="Upload image">
                            </form>
                        <?php } else { ?>
                            <form enctype="multipart/form-data" method="POST">
                                <input class="mb-3" type="file" name="fileToUpload" id="fileToUpload">
                                <div class="row m-0 p-0 justify-content-center">
                                <div class="col-10">
                                <input class="form-control btn btn-light myBtn" type="submit" value="upload" name="submit">
                            </form>
                        <?php } ?>
                        <?php if(!empty($_POST['submit'])) { ?>
                            <?= $message['format'] ?? '' ?>
                            <?= $message['type'] ?? '' ?>
                            <?= $message['size'] ?? '' ?>
                            <?= $message['quota'] ?? '' ?>
                            <?= $message['nok'] ?? '' ?>
                            <?= $message['success'] ?? '' ?>
                        <?php } ?>
                        
                        <form class="mt-2" method="POST" action="gallery.php">
                            <input class="form-control btn btn-light myBtn" type="submit" id="submitGallery" name="submitGallery" value="Gallery">
                        </form>
                    </div>
                </div>
                <?php if (empty($_POST['submitUpload'])) { ?>
                    <div class="mt-5 text-center">
                        <a class="text-white text-decoration-none h5" href="deconnection.php">Déconnexion</a>
                    </div>
                <?php } else { ?>
                    <div class="mt-5 text-center">
                        <a class="text-white text-decoration-none h5" href="dashboard.php">Dashboard</a>
                    </div>
                <?php } ?>
            </div>
        <?php } else {
            header('Location: no-allowed.php');
        } ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/script.js"></script>
</body>

</html>