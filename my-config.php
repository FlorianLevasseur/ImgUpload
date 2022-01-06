<?php

$maxSize = 1000000;
$extensions = 'jpg png';
$hash_pwd1 = password_hash("hello", PASSWORD_DEFAULT);
$hash_pwd2 = password_hash("world", PASSWORD_DEFAULT);
$hash_pwd3 = password_hash("pioupiou", PASSWORD_DEFAULT);
$users = [
    "riri" => [
        "mdp" => $hash_pwd1,
        "formule" => "crevette",
        "quota" => "5"
    ],
    "fifi" => [
        "mdp" => $hash_pwd2,
        "formule" => "homard",
        "quota" => "10"
    ],
    "loulou" => [
        "mdp" => $hash_pwd3,
        "formule" => "langouste",
        "quota" => "20"
    ]
]

?>