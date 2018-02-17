<?php
require_once "MySiteDB.php"; //Подключаемся к БД
//Запись нового адреса в таблицу
$longurl=$_POST['url'];
if($longurl)
{
    $query="INSERT INTO link(link_url) VALUES('$longurl')";
    $result=mysqli_query($link,$query);	
};		
$query="SELECT*FROM link WHERE link_url='$longurl'";
$select_id = mysqli_query($link,$query);
$link_id=mysqli_fetch_array($select_id);
$id=$link_id['link_id']; 
// Получение кода ссылки из индекса
$short_link = $id;//Пока хэш=id далее планируется его генерировать

$query="UPDATE link SET hash='$short_link' WHERE link_id='$id'";
$result=mysqli_query($link,$query);				

$query="SELECT hash FROM link WHERE link_id='$id'";
    $select_hash=mysqli_query($link,$query);
    $link_hash=mysqli_fetch_array($select_hash);
    $hash=$link_hash['hash']; 
 //Генерирование новой ссылки         
$host = 'http://short.ru/';
$url = $host.$hash;
$res['url'] = $url;
$res['msg'] = 'saccess url';
$res['err'] = '';
echo json_encode($res);