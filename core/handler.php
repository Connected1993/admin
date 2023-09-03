<?php

declare(strict_types=1);


// если в теле входящего POST запроса есить параметр/ключ action тогда выполняем этот блок кода
if (isset($_POST['action']))
{
    require 'config.php';
    require 'db.php';

    //debug($_POST);


    $action = $_POST['action'];

    switch($action)
    {
        case 'registration': 
        case 'authorization':
        
        //  если такой файл существует
        if ( file_exists("function/$action.php") )
        {
            require "function/$action.php"; 
        }
        break;
        default: die('Неизвестный action'); break;
    }
    //^(\+?7|8)([0-9]{10}|[0-9]{11})$
    //^(\+?7|8)(\d{10}|\d{11})$

}


function debug($data):void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

//  to do 
// 0) protected SQL injection
// 1) md5 hash passowrd
// 2) validation phone and email
