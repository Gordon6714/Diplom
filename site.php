<?php 

session_start();


$conn = mysqli_connect($_SESSION['serverip'],$_SESSION['username'],$_SESSION['password'],$_SESSION['database']);

if(!$conn){
    die("Ошибка подключения" . mysqli_connect_error());
}


$id_filma = 1;
$sql = "SELECT * FROM opisanieFilma WHERE id = $id_filma";
if($result = mysqli_query($conn, $sql)){
    foreach($result as $row){
        $nameFilm = "SELECT * FROM name_film WHERE id = $row[id_filma]";
        if($filmresult = mysqli_query($conn, $nameFilm)){
            foreach($filmresult as $grow){
                $nazvanieFilma = $grow["name"];
            }
        }
    }
}
if($result = mysqli_query($conn, $sql)){ 
    foreach($result as $row){
      

    
  

?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
            <div class="menu_raspis"><p><a href="#raspic">Расписание</a></p></div>
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

        
        <form action="/page/okno.php" method="post">
            <input class="btn_zabroniravat" type="submit" value="Забронировать место" >
        </form>
        

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
            
            <div class="list_block3_title_text"><a name="raspic">РАСПИСАНИЕ СЕАНСОВ</a></div>

            <div class="list_block3_block_sort">
                <div class="list_block3_block_sort_text"><p>Дата сортировки</p></div>
                <div class="list_block3_block_sort_rect"><img src="img/sort_rect.png"></div>
            </div>

            

                <div class="list_block3_raspis">

                    
                    <div class="list_block3_raspis_film1">
                        
                        <div class="list_block3_raspis_film1_nazvan"><a href="page/film_info.php"><?php echo $nazvanieFilma;?> </a></div>
                        <div class="list_block3_raspis_film1_photo">
                            <img class="list_block3_raspis_film1_photo" src=" <?php echo $row["imgFilm"];?>">
                        </div>
                        <div class="list_block3_raspis_film1_ogran"><p>категория 16+</p></div>
                        <div class="list_block3_raspis_film1_block_raspis">
                            

                                <?php
                                    $schetchic = 1;
                                    $schetchic2 = 1;
                                     $raspisanie = "SELECT * FROM adresa";
                                     if($filmresult = mysqli_query($conn, $raspisanie)){
                                        foreach($filmresult as $adres){
                                        
                                    

                                ?>
                                <div class="list_block3_raspis_film1_block_raspis_rc<?php echo $schetchic?>">
                                    <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                    <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p><?php echo $adres["name"]; ?></p></div>
                                        
                                            <?php $id_adresa = $adres["id"];
                                            $time = "SELECT * FROM raspisanie WHERE id_filma = $id_adresa" ;
                                            if($timeE = mysqli_query($conn, $time)){
                                                foreach($timeE as $timeR){

                                                    ?><div class="list_block3_raspis_film1_block_raspis_rc1_time<?php echo $schetchic2; ?>"><p><?php echo $timeR["time"]; ?></p></div>
                                                    <?php

                                                    $schetchic2 = $schetchic2 + 1;
                                                }
                                            }
                                            
                                            ?>

                                    
                                    
                                </div>
                                    <?php 
                                        $schetchic = $schetchic +1;
                                        }
                                    } ?>
                            
                        </div>
                    </div>

                    <div class="list_block3_raspis_film2">
                                

                        <div class="list_block3_raspis_film1_nazvan"><a href="page/film_info.php"><p>Название фильма</p></a></div>
                        <div class="list_block3_raspis_film1_photo">
                            <div class="list_block3_raspis_film1_photo_text"><p>Картинка</p></div>
                        </div>
                        <div class="list_block3_raspis_film1_ogran"><p>категория 16+</p></div>
                        <div class="list_block3_raspis_film1_block_raspis">
                            <div class="list_block3_raspis_film1_block_raspis_rc1">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                            <div class="list_block3_raspis_film1_block_raspis_rc2">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                            <div class="list_block3_raspis_film1_block_raspis_rc3">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="list_block3_raspis_film3">
                        <div class="list_block3_raspis_film1_nazvan"><a href="page/film_info.php"><p>Название фильма</p></a></div>
                        <div class="list_block3_raspis_film1_photo">
                            <div class="list_block3_raspis_film1_photo_text"><p>Картинка</p></div>
                        </div>
                        <div class="list_block3_raspis_film1_ogran"><p>категория 16+</p></div>
                        <div class="list_block3_raspis_film1_block_raspis">
                            <div class="list_block3_raspis_film1_block_raspis_rc1">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                            <div class="list_block3_raspis_film1_block_raspis_rc2">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                            <div class="list_block3_raspis_film1_block_raspis_rc3">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="list_block3_raspis_film4">
                        <div class="list_block3_raspis_film1_nazvan"><a href="page/film_info.php"><p>Название фильма</p></a></div>
                        <div class="list_block3_raspis_film1_photo">
                            <div class="list_block3_raspis_film1_photo_text"><p>Картинка</p></div>
                        </div>
                        <div class="list_block3_raspis_film1_ogran"><p>категория 16+</p></div>
                        <div class="list_block3_raspis_film1_block_raspis">
                            <div class="list_block3_raspis_film1_block_raspis_rc1">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                            <div class="list_block3_raspis_film1_block_raspis_rc2">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                            <div class="list_block3_raspis_film1_block_raspis_rc3">
                                <div class="list_block3_raspis_film1_block_raspis_rc1_name"><p>Адрес кинотеатра</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time1"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_blockTime1"></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time2"><p>17:30</p></div>
                                <div class="list_block3_raspis_film1_block_raspis_rc1_time3"><p>17:30</p></div>
                            </div>
                        </div>
                    
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


