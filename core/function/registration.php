<?php

$login =    (isset($_POST['login']))? $_POST['login'] : null;
$password = (isset($_POST['password']))? $_POST['password'] : null;
$passwordConfirm = (isset($_POST['passwordConfirm']))? $_POST['passwordConfirm'] : null;
$email = (isset($_POST['email']))? $_POST['email'] : null;
$phone = (isset($_POST['phone']))? $_POST['phone'] : null;

if ($password != $passwordConfirm) {
    echo 'пароли не совпадают!';
    return false;
}


$sql = " INSERT INTO users (login,password,email,phone) VALUES ('$login','$password','$email',$phone) ";
echo $sql;
// отправили селект в базу
$dbh->query($sql);
// верни мне id последней вставленной строки
$result = $dbh->lastInsertId();
if ($result)
{
    echo 'Вы успешно зарегистрировались!';
}