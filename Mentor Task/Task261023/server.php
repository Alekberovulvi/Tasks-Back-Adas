<?php
session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $users = [
        [
            "name" => "Murad",
            "surname" => "Agamedov",
            "email" => "agamedov94@mail.ru",
            "password" => '123'
        ],
        [
            "name" => "Ulvi",
            "surname" => "Alekberov",
            "email" => "alekberov@mail.ru",
            "password" => '345'
        ]
        ];


    foreach($users as $user) {
        if($user["email"] == $email and $user['password'] == $password) {
            $name = $user['name'];
            $surname = $user['surname'];
            echo "salam $name $surname";
            $_SESSION['login'] = true;
            exit;
        } 
    }
    echo "bele bir istifadeci movcud deyil";
    exit;
?>