<?php 

include_once 'db_settings.php';

$id_filma = 1;
$sql = $sql_query = "SELECT * FROM name_film LEFT JOIN  opisaniefilma  ON name_film.id=opisaniefilma.id_filma WHERE name_film.id = $id_filma";
$result = mysqli_query($conn, $sql);

if($result = mysqli_query($conn, $sql)){
    foreach($result as $row){
        $nazvanieFilma = $row["name"];
        /*$nameFilm = "SELECT * FROM name_film WHERE id = $row[id_filma]";
        if($filmresult = mysqli_query($conn, $nameFilm)){
            foreach($filmresult as $grow){
                $nazvanieFilma = $grow["name"];
            }
        }*/
    }
}
if($result = mysqli_query($conn, $sql)){ 
    foreach($result as $row){
      

    
  

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="preconnect" href="favicon.png">
    <link rel="shortcut icon" href="favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Junge&display=swap" rel="stylesheet">  
    <title>Главная страница</title>
    

    <style>
        .list_block3_raspis{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
        }
        .list_block3_raspis_film1{
            flex-basis: 100%;
        }
    </style>
</head>
<body>

    <div class="list">

        <div class="menu">
            <div class="img_bg_block1"><img src="img/bg_block1.png" alt=""></div>
            <div class="logo_line"></div>
            <div class="menu_raspis"><p><a href="#raspis">Расписание</a></p></div>
            <div class="menu_akci"><p>Акции и скидки</p></div>
            <div class="menu_news"><a href="page/news.php"><p>Новости</p></a></div>
            <div class="menu_new"><p>Скоро в кино</p></div>
            <div class="menu_kontakt"><p>Контакты</p></div>
            
        </div>
        <div class="logotip">
            <div class="logo_rt"></div>
            <div class="logo_name"><p>KinoBraid</p></div>
        </div>

        <div class="list_block">
            <div class="list_start_logotip">
                <img src="img/logotip.png">
            </div>
            <div class="list_block_text_block">
                <div class="list_block_text_block_name"><p>KinoBraid</p></div>
                
                <div class="list_block_text_block_rt">
                    <div class="list_block_text_block_rt_text"><p>Кино которое любят</p></div>
                </div>

                <div class="list_block_text_block_text"><p>Благодарим вас, за выбор нашего кинотеатра</br>посмотрите интересующие</br> вас фильмы</p></div>

                <div class="list_block_text_block_btn">
                    <div class="list_block_text_block_btn_text"><p><a href="#raspic">Предстоящие фильмы</a></p></div>
                </div>

            </div>
        </div>
        

        <div class="list_block2">

            <div class="list_block2_rt1">
                <div>
                    <div class="list_block2_rt1_logotip"><img src="img/logotip_mini.png"></div>
                    <div class="list_block2_rt1_logotip_text"><p>KinoBraid</p></div>
                </div>

                <div class="list_block2_rt1_text1"><p>ближайшие сеансы</p></div>

                <div class="list_block2_rt1_block1">
                    <div class="list_block2_rt1_block1_name"><a href="page/film_info.php">Кино Название</a></div>
                    <div class="list_block2_rt1_block1_kategor"><p>категория 16+</p></div>
                    <div class="list_block2_rt1_block1_img"><img src="img/kategori.png"></div>
                    <div class="list_block2_rt1_block1_timeText"><p>черех x минут</p></div>
                    <div class="list_block2_rt1_block1_adres"><p>Адрес кинотеатра</p></div>
                </div>

                <div class="list_block2_rt1_block2">
                    <div class="list_block2_rt1_block1_name"><a href="page/film_info.php">Кино Название</a></div>
                    <div class="list_block2_rt1_block1_kategor"><p>категория 16+</p></div>
                    <div class="list_block2_rt1_block1_img"><img src="img/kategori.png"></div>
                    <div class="list_block2_rt1_block1_timeText"><p>черех x минут</p></div>
                    <div class="list_block2_rt1_block1_adres"><p>Адрес кинотеатра</p></div>
                </div>

                <div class="list_block2_rt1_block3">
                    <div class="list_block2_rt1_block1_name"><a href="page/film_info.php">Кино Название</a></div>
                    <div class="list_block2_rt1_block1_kategor"><p>категория 16+</p></div>
                    <div class="list_block2_rt1_block1_img"><img src="img/kategori.png"></div>
                    <div class="list_block2_rt1_block1_timeText"><p>черех x минут</p></div>
                    <div class="list_block2_rt1_block1_adres"><p>Адрес кинотеатра</p></div>
                </div>

                <div class="list_block2_rt1_block4">
                    <div class="list_block2_rt1_block1_name"><a href="page/film_info.php">Кино Название</a></div>
                    <div class="list_block2_rt1_block1_kategor"><p>категория 16+</p></div>
                    <div class="list_block2_rt1_block1_img"><img src="img/kategori.png"></div>
                    <div class="list_block2_rt1_block1_timeText"><p>черех x минут</p></div>
                    <div class="list_block2_rt1_block1_adres"><p>Адрес кинотеатра</p></div>
                </div>
                
            </div>

        </div>

        <div class="list_block3">            
            <div class="list_block3_title_text" id="raspis"><a name="raspic">СЕГОДНЯ В ПРОКАТЕ</a></div>
                <div class="list_block3_raspis">
                    <ul>
                    <? include_once 'page/film_list.php'; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer_news">
            <div class="footer_block">
                <div class="footer_img"><img src="img/footer_img.png"></div>
                <div class="footer_name"><p>KinoBraid</p></div>
                <div class="footer_blockText">
                    <div class="footer_blockText_text"><p>Кино которое любят</p></div>
                </div>
            </div>
        </div>
        
            
    </div>
    <?php
    }
}?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <body>
        <div class='result'>
        </div>
        <div class='cinemaHall zal1'></div>

        </body>



</body>
</html>


