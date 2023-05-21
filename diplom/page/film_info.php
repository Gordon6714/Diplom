<?

include_once '../db_settings.php';

$id_filma = $_GET['id_filma'];
$sql = "SELECT *,raspisanie.id'seans_id',name_film.name'film_name',adresa.name'adres_name' FROM name_film 
    LEFT JOIN opisaniefilma ON name_film.id=opisaniefilma.id_filma 
    LEFT JOIN raspisanie ON name_film.id = raspisanie.id_filma
    LEFT JOIN adresa ON raspisanie.id_adressa=adresa.id
    WHERE name_film.id = $id_filma
    ORDER BY name_film.id, raspisanie.id_adressa,raspisanie.time";

if($result = mysqli_query($conn, $sql)){ 
    $data = $result -> fetch_array();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="preconnect" href="../favicon.png">
    <link rel="shortcut icon" href="../favicon.png">
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
    <link rel="stylesheet" href="../css/film_info.css"> 
    <title>Фильм</title>
</head>
<body>
    <div>
            <div class="bg_film_info"></div>
            <div class="menu">
                <div class="news_img_bg_block1"><img src="../img/bg_block1.png" alt=""></div>
                <div class="logo_line"></div>
                <div class="menu_raspis"><a href="../index.php#raspic"><p>Расписание</p></a></div>
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
            
                <div class="FilmInfo">
                    <div class="FilmInfo_name" style="width: 100%;"><?php echo $data["film_name"]; ?></div>
                </div>

                <img class="FilmInfo_photo" src="<?php echo $data["imgFilm"];?>">

                <div class="FilmInfo_blockInfo">
                    <div class="FilmInfo_blockInfo_block_name">
                        <div class="FilmInfo_blockInfo_name">Название</div>
                        <div class="FilmInfo_blockInfo_name_inf">В эфире</div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_god">
                        <div class="FilmInfo_blockInfo_name">Год выпуска</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["vipusk"] ; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_premera">
                        <div class="FilmInfo_blockInfo_name">Премьера KinoBraid</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["premiera"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_ganr">
                        <div class="FilmInfo_blockInfo_name">Жанр</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["ganr"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_regic">
                        <div class="FilmInfo_blockInfo_name">Режисёр</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["regiser"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_schenar">
                        <div class="FilmInfo_blockInfo_name">Сценарист</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["chenarist"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_roli">
                        <div class="FilmInfo_blockInfo_name">Исполнители роли</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["roli"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_count">
                        <div class="FilmInfo_blockInfo_name">Страна</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["strana"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_time">
                        <div class="FilmInfo_blockInfo_name">Продолжительность</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["filmTime"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                    <div class="FilmInfo_blockInfo_block_ogran">
                        <div class="FilmInfo_blockInfo_name">Ограниечение</div>
                        <div class="FilmInfo_blockInfo_name_inf"><?php echo $data["ogranichenie"]; ?></div>
                        <div class="FilmInfo_blockInfo_line"></div>
                    </div>
                </div>

                <div class="FilmInfo_blockOpis">
                    <div class="FilmInfo_block_oglav_line1"></div>
                    <div class="FilmInfo_block_oglav_line2"></div>
                    <div class="FilmInfo_block_oglav_name">Описание</div>
                    <div class="FilmInfo_block_oglav_text"><?php echo $data["opisanie"]; ?></div>
                </div>
                <div class="FilmInfo_blockTreiler">
                    <div class="FilmInfo_block_oglav_line1"></div>
                    <div class="FilmInfo_block_oglav_line2"></div>
                    <div class="FilmInfo_block_oglav_name">Трейлер</div>
                </div>
                <div class="FilmInfo_blockTreiler_video">
                    <div class="FilmInfo_blockTreiler_video_text">
                    <iframe width="833px" height="370px" src="<?php echo $data["treiler"];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
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
                    <div class="film_name"><p><?php echo $data["film_name"]; ?></p></div>
                            <div class="film_image">
                                <img src="<? echo $data["imgFilm"];?>">
                            </div>
                        <div class="film_age_limit"><p>категория 16+</p></div>
                        <div class="film_sessions">

                        <?$id_address = 0;
                        if($result = mysqli_query($conn, $sql)){
                            foreach($result as $data){ 
                                if ($id_address != $data['id_adressa']){
                                    if ($id_address != 0){
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                    $id_address = $data['id_adressa'];
                                    echo "<div class=\"film_session_adress\">";
                                    echo "<p >".$data["adres_name"]."</p>";
                                    echo "<div class=\"film_session_adress_block_time\">";
                                }
                                echo "<a href=../page/mesta.php?id_seansa=".$data["seans_id"]." >".$data["time"]."</a>";
                            }
                            echo"</div>";
                            echo"</div>";
                            echo"</div>";
                        }
                        ?>               
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
