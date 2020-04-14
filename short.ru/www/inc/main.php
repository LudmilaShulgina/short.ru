<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>Short URL</title>
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/main.js" charset="utf-8"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <main>
            <div class="wrapper">
                <h1 class="title">Shorten link</h1>
                <p class="slogan">Prettify your URL in one move</p>
                <div class="formbox">
                    <form onsubmit="return false;">
                        <input type="text" name="url" id="url" placeholder="Your link">
                        <input type="submit" id="btnUrl" value="Submit">
                    </form>
                </div>
                <p class="shorten_link"></p>
                <div id="story">
                <table>
                    <?php
                    //Вывод на экран истории запросов
                    require_once("MySiteDB.php");
                    $query_link = "SELECT * FROM `link` ORDER BY `link_id` DESC";
                             $select_link=mysqli_query($link,$query_link);
                              while($addr=mysqli_fetch_array($select_link))
                            {
                                  $long_url=$addr['link_url'];
                                  $hash=$addr['hash'];
                                  echo "<tr><td><a href=\"http://short.ru/",$hash,"\">http://short.ru/",$hash,"</a></td><td class=\"longurl\">",$long_url,"</td></tr>";
                            };
                    ?>
                </table>
                </div>
            </div>
        </main>
    </body>
</html>