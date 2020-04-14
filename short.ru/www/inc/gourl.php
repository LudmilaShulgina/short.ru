<?php
require_once "MySiteDB.php"; //Подключаемся к БД

// Регулярное выражение для выдления хэша
$words = explode(' ', $_SERVER['REQUEST_URI']);
$hash = trim($words[count($words) - 1], '/');


//check Duplicate
 $result = "SELECT*FROM link WHERE hash='$hash'";
 $query = mysqli_query($link, $result);
 if(!mysqli_num_rows($query)) {
    include_once 'notfound.php';
 }
 else{
    $link_id=mysqli_fetch_array($query);
    $url=$link_id['link_url'];

    //Перенаправление на длинный адрес

    header('Location: '.$url);
    exit;
 }

