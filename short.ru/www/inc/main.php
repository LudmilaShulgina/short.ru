<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>Short URL</title>
        <script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/main.js" charset="utf-8"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/newcss.css">
    </head>
    <body>
        <main>
        <div class="formbox">
            <form onsubmit="return false;">
                <label for="url">URL</label>
                <input name="url" id="url">
                <input type="submit" id="btnUrl" value="Submit">
            </form>
        </div>
        <p class="shorten_link"></p>
        <div id="story">
        <table>
           
<?php
//Вывод на экран истории запросов
require_once("MySiteDB.php");
$query_link = "SELECT * FROM link ORDER BY link_id DESC";   
         $select_link=mysqli_query($link,$query_link);
          while($addr=mysqli_fetch_array($select_link))
        {      
              $long_url=$addr['link_url'];
              $hash=$addr['hash'];
              echo "<tr><td class=\"longurl\">",$long_url,"</td><td><a href=\"http://short.ru/",$hash,"\">http://short.ru/",$hash,"</a></td>";
        };
?>
        </table>
        </div>
        </main>
    </body>
</html>