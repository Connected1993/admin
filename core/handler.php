<?php

declare(strict_types=1);


// если в теле входящего POST запроса есить параметр/ключ action тогда выполняем этот блок кода
if (isset($_POST['action']))
{
    require 'config.php';
    require 'db.php';

    debug($_POST);
    $login =    $_POST['login'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if ($password != $passwordConfirm) {
        echo 'пароли не совпадают!';
        return false;
    }


    $sql = " INSERT INTO users (login,password,email,phone) VALUES ('$login','$password','$email',$phone) ";
    // отправили селект в базу
    $dbh->query($sql);
    // верни мне id последней вставленной строки
    $result = $dbh->lastInsertId();
    if ($result)
    {
        echo 'Вы успешно зарегистрировались!';
    }
}


function debug($data):void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}