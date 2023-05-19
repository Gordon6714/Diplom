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








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Junge&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css"> 
    <style>
        .FilmInfo_blockInfo_name_inf{
            width: 100%; 
            left: 300px;
        }

        .FilmInfo_block_oglav_text{
            margin-top: 5%;
            color: white;
            font-family: 'Junge';
            font-style: normal;
            font-size: 24px;
            line-height: 29px;
            color: #FFFFFF;
        }

        .FilmInfo_blockTreiler_video{
            position: absolute;
            width: 830px;
            height: 368px;
            left: 305px;
            top: 1809px;
        }

        
    </style>
</head>
<body>
    <div>
            <div class="bg_film_info"></div>
            <div class="menu">
                <div class="news_img_bg_block1"><img src="../img/bg_block1.png" alt=""></div>
                <div class="logo_line"></div>
                <div class="menu_raspis"><a href="../site.php#raspic"><p>Расписание</p></a></div>
                <div class="menu_akci"><p>Акции и скидки</p></div>
                <div class="menu_news"><a href="../page/news.php"><p>Новости</p></a></div>
                <div class="menu_new"><p>Скоро в кино</p></div>
                <div class="menu_kontakt"><p>Контакты</p></div>
                
            </div>
            <form action="">
            <input onclick="window.location='/page/okno.php'" class="btn_zabroniravat" type="button" value="Забронировать место" >
            </form>
            <div class="logotip">
                <div class="logo_rt"></div>
                <div class="logo_name"><p>KinoBraid</p></div>
                <div class="logotip_img"><img src="../img/mini_logo.png"></div>
            </div>
            <div>
                <div class="FilmInfo">
                    <div class="FilmInfo_name" style="width: 100%;"><?php echo $nazvanieFilma; ?></div>
                </div>

                <img class="FilmInfo_photo" src="<?php echo $row["imgFilm"];?>">

                <div class="FilmInfo_blockInfo">
                    <div class="FilmInfo_blockInfo_block_name">
                        <div class="FilmInfo_blockInfo_name">Название</div>
                        <div class="FilmInfo_blockInfo_name_inf">В эфире</div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_god">
                        <div class="FilmInfo_blockInfo_name">Год выпуска</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["vipusk"] ; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_premera">
                        <div class="FilmInfo_blockInfo_name">Премьера KinoBraid</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["premiera"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_ganr">
                        <div class="FilmInfo_blockInfo_name">Жанр</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["ganr"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_regic">
                        <div class="FilmInfo_blockInfo_name">Режисёр</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["regiser"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_schenar">
                        <div class="FilmInfo_blockInfo_name">Сценарист</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["chenarist"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_roli">
                        <div class="FilmInfo_blockInfo_name">Исполнители роли</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["roli"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_count">
                        <div class="FilmInfo_blockInfo_name">Страна</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["strana"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_time">
                        <div class="FilmInfo_blockInfo_name">Продолжительность</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["filmTime"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_ogran">
                        <div class="FilmInfo_blockInfo_name">Ограниечение</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $row["ogranichenie"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                </div>

                <div class="FilmInfo_blockOpis">
                    <div class="FilmInfo_block_oglav_line1"></div>
                    <div class="FilmInfo_block_oglav_line2"></div>
                    <div class="FilmInfo_block_oglav_name">Описание</div>
                    <div class="FilmInfo_block_oglav_text"><?php echo $row["opisanie"]; ?></div>
                </div>
                <div class="FilmInfo_blockTreiler">
                    <div class="FilmInfo_block_oglav_line1"></div>
                    <div class="FilmInfo_block_oglav_line2"></div>
                    <div class="FilmInfo_block_oglav_name">Трейлер</div>
                </div>
                <div class="FilmInfo_blockTreiler_video">
                    <div class="FilmInfo_blockTreiler_video_text">
                    <iframe width="833px" height="370px" src="<?php echo $row["treiler"];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
                    style="
                    margin-top: -163px;
                    margin-left: -360px;
                    "></iframe>
                        </iframe>
                    </div>
                </div>

                <div class="FilmInfo_blockSeans">
                    <div class="FilmInfo_block_oglav_line1"></div>
                    <div class="FilmInfo_block_oglav_line2"></div>
                    <div class="FilmInfo_block_oglav_name">Сеансы</div>
                </div>

                <div class="FilmInfo_blockSeans_time">
                    <div class="list_block3_raspis_film1_nazvan"><p>Название фильма</p></div>
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
                        <div class="FilmInfo_blockSeans_time_btn1_block">
                            <div class="FilmInfo_blockSeans_time_btn1">
                                <div class="FilmInfo_blockSeans_time_block_btn"></div>
                                <div class="FilmInfo_blockSeans_time_block_btnText">Забронировать</div>
                            </div>
                            <div class="FilmInfo_blockSeans_time_btn2">
                                <div class="FilmInfo_blockSeans_time_block_btn"></div>
                                <div class="FilmInfo_blockSeans_time_block_btnText">Забронировать</div>
                            </div>
                            <div class="FilmInfo_blockSeans_time_btn3">
                                <div class="FilmInfo_blockSeans_time_block_btn"></div>
                                <div class="FilmInfo_blockSeans_time_block_btnText">Забронировать</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

                


                
            </div>

            <div class="footer_info">
                <div class="footer_block">
                    <div class="footer_img"><img src="../img/footer_img.png"></div>
                    <div class="footer_name"><p>KinoBraid</p></div>
                    <div class="footer_blockText">
                        <div class="footer_blockText_text"><p>Кино которое любят</p></div>
                    </div>
                </div>
            </div>

    </div>  
</body>
</html>

<?php
    }

echo "</table>";
}else{
    echo "Ошибка: " . mysqli_error($conn);
}

?>