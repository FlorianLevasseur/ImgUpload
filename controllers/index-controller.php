<?php
    $test = 0;
    $arrayErrors = [];
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        
        foreach ($users as $key => $value) {
            if ($_POST['login'] == $key) {
                $test++;
                if(password_verify($_POST['password'], $value['mdp'])) {
                    session_start();
                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['quota'] = $users[$_POST['login']]['quota'];
                    header('Location: views/dashboard.php');
                } else {
                    $arrayErrors['password'] = "Login ou Mot de passe incorrect !";
                }
            }
        }
        if ($test == 0) {
            $arrayErrors['login'] = "Login ou Mot de passe incorrect !";
        }
    }
?>