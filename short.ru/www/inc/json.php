<?php
require_once "MySiteDB.php"; //Подключаемся к БД

//Запись нового адреса в таблицу
$longurl=$_POST['url'];
$hash = $_POST['hash'];

if($longurl)
    {
        //check Duplicate
         $result = "SELECT*FROM link WHERE link_url='$longurl'";
         $query = mysqli_query($link, $result);
         if(!mysqli_num_rows($query)) {
            $query="INSERT INTO link(link_url,hash) VALUES('$longurl','$hash')";
                         $result=mysqli_query($link,$query);
         }
    }
$query="SELECT*FROM link WHERE link_url='$longurl'";
$select_id = mysqli_query($link,$query);
$link_id=mysqli_fetch_array($select_id);
$id=$link_id['link_id'];
// Получение кода ссылки из индекса
$short_link = $hash;

 //Генерирование новой ссылки
$host = 'http://short.ru/';
$url = $host.$hash;
$res['url'] = $url;
$res['msg'] = 'saccess url';
$res['err'] = '';
echo json_encode($res);






