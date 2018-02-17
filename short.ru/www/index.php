<?php
//Перенаправление запросов
if(isset($_POST['url']) && !empty($_POST['url']))
{
    include_once 'inc/json.php'; 
}
// Редирект 
elseif(isset($_SERVER['PATH_INFO']) && !empty($_SERVER['PATH_INFO']))
{
    include_once 'inc/gourl.php';
}
else
{
    include_once 'inc/main.php';
}