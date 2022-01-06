<?php
session_start();
$message = [];
if (!empty($_SESSION)) {
    $quota = 0;
    $quotaMax = $_SESSION['quota'];
    $array_scan = scandir("../img");
    $array_images = [];
    foreach ($array_scan as $value) {
        $array_name = explode("-", $value);
        $pref = reset($array_name);
        if ($pref == $_SESSION['login']) {
            array_push($array_images, $value);
            $quota += filesize("../img/" . $value) / 1024 / 1024;
            $quota = round($quota, 2);
        }
    }
    $nbPictures = count($array_images);
}

function uploadImg($dir, $size, $ext)
{
    $arrayErrors = [];
    $quota = 0;
    $quotaMax = $_SESSION['quota'];
    $array_scan = scandir("../img");
    $array_images = [];
    foreach ($array_scan as $value) {
        $array_name = explode("-", $value);
        $pref = reset($array_name);
        if ($pref == $_SESSION['login']) {
            array_push($array_images, $value);
            $quota += filesize("../img/" . $value) / 1024 / 1024;
            $quota = round($quota, 2);
        }
    }
    $target_dir = $dir;
    $target_name = $_FILES['fileToUpload']['name'];
    $target_array = explode(".", $_FILES['fileToUpload']['name']);
    $target_extension = end($target_array);
    $_FILES['fileToUpload']['name'] = $_SESSION['login'] . "-" . uniqid() . "." . $target_extension;
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $check = @getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check == false) {
        $arrayErrors['format'] = "Votre fichier n'est pas une image.";
        // echo nl2br("Votre fichier n'est pas une image.\n");
        $uploadOk = 0;
    } else if (strpos($ext, $target_extension) === false) {
        $arrayErrors['type'] = "Votre fichier n'est pas de type jpg, jpeg, png ou gif.";
        // echo nl2br("Votre fichier n'est pas de type jpg, jpeg, png ou gif.\n");
        $uploadOk = 0;
    } else if ($_FILES['fileToUpload']['size'] > $size) {
        $arrayErrors['size'] = "Désolé, votre fichier doit faire moins de 1 Mo.";
        // echo nl2br("Désolé, votre fichier doit faire moins de 1 Mo.\n");
        $uploadOk = 0;
    } else if ($quota + ($_FILES['fileToUpload']['size'] / 1024 / 1024) > $quotaMax) {
        $arrayErrors['quota'] = "Désolé, vous n'avez plus assez de place pour uploader cette photo.";
        // echo nl2br("Désolé, vous n'avez plus assez de place pour uploader cette photo.\n");
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $arrayErrors['nok'] = "Votre fichier n'a pas été Upload.";
        // echo "Votre fichier n'a pas été Upload.";
    } else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $arrayErrors['success'] = "Le fichier " . htmlspecialchars(basename($target_name)) . " a bien été uploadé.";
        // echo "Le fichier " . htmlspecialchars(basename($target_name)) . " a bien été uploadé.";
    }
    return $arrayErrors;
}
if (!empty($_POST['submit'])) {
    $message = uploadImg("../img/", $maxSize, $extensions);
    $quota = 0;
    $quotaMax = $_SESSION['quota'];
    $array_scan = scandir("../img");
    $array_images = [];
    foreach ($array_scan as $value) {
        $array_name = explode("-", $value);
        $pref = reset($array_name);
        if ($pref == $_SESSION['login']) {
            array_push($array_images, $value);
            $quota += filesize("../img/" . $value) / 1024 / 1024;
            $quota = round($quota, 2);
        }
    }
    $nbPictures = count($array_images);
}
