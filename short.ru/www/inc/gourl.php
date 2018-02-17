<?php
// Регулярное выражение для выдления хэша
$hash = preg_replace('|^/|', '', $_SERVER['PATH_INFO']);
//Запрос в БД на соответствие хэша
require_once("MySiteDB.php");
$query_link = "SELECT * FROM link WHERE hash='$hash'";   
$select_link=mysqli_query($link,$query_link);
while($addr=mysqli_fetch_array($select_link))
        {      
              $gourl=$addr['link_url'];
        };
        
//Перенаправление на длинный адрес
        
header('Location: '.$gourl);
exit;