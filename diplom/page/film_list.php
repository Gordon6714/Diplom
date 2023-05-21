<?
include_once 'db_settings.php';

$sql = "SELECT *,raspisanie.id'seans_id',name_film.name'film_name',adresa.name'adres_name' FROM name_film
            LEFT JOIN opisaniefilma ON name_film.id=opisaniefilma.id_filma 
            LEFT JOIN raspisanie ON name_film.id = raspisanie.id_filma
            LEFT JOIN adresa ON raspisanie.id_adressa=adresa.id
                ORDER BY name_film.id, raspisanie.id_adressa,raspisanie.time";
$id_film = 0; $id_address = 0;

if($result = mysqli_query($conn, $sql)){
    foreach($result as $row){
        if ($id_film != $row['id_filma']){
            $id_address = 0;
            if ($id_film != 0){
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</li>";
            }
            $id_film = $row['id_filma'];
            echo "<li>";
            echo "<div class=\"film\">";
            echo "<div class=\"film_name\"><a href='page/film_info.php?id_filma=". $id_film ."'>".$row["film_name"]."</a></div>";
            echo "<div class=\"film_image\"><img src=\"".$row["imgFilm"]."\"></div>";
            echo "<div class=\"film_age_limit\"><p>категория ".$row["ogranichenie"] ."</p></div>";           
            echo "<div class=\"film_sessions\">";
        }
        if ($id_address != $row['id_adressa']){
            if ($id_address != 0){
                echo "</div>";
                echo "</div>";
            }
            $id_address = $row['id_adressa'];
            
            echo "<div class=\"film_session_adress\">";
            echo "<p>".$row["adres_name"]."</p>";
            echo "<div class=\"film_session_adress_block_time\">";
        }

        
        echo "<a href=../page/mesta.php?id_seansa=".$row["seans_id"]." >".$row["time"]."</a>";
    }
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo "</li>";
}

?>