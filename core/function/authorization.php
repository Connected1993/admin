<?php

$account =  (isset($_POST['account']))? $_POST['account'] : null;
$password = (isset($_POST['password']))? $_POST['password'] : null;

$sql = " SELECT * FROM users WHERE login = '$account' AND password = '$password' ";
echo $sql;
// отправили селект в базу
// получили результат в виде массива
$result = $dbh->query($sql)->fetch();

debug($result);

//( login = '$account' or email = '$account' or phone = '$account' )