<?php

$account =  (isset($_POST['account']))? $_POST['account'] : null;
$password = (isset($_POST['password']))? $_POST['password'] : null;


$sql = " SELECT * FROM users WHERE ( login = :param1 or email =:param1 or phone =:param1 ) AND password = :param2 ";

// подготовить запрос
$stm = $dbh->prepare($sql);
// отправить
$stm->execute(['param1'=>$account,'param2'=>$password]);

$result = $stm->fetch();

if ($result)
{
    echo 'Вошли';
}
else
{
    echo 'Неверный логин или пароль';
}
// получили результат в виде массива
debug($result);

//( login = '$account' or email = '$account' or phone = '$account' )