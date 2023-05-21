<?

include_once '../db_settings.php';

$id_seansa = $_POST['id_seansa'];
$arr_places = json_decode($_POST['arrPlace']);

//echo "php1:  " . $id_seansa;
//echo "php2:  " . $arr_places;
foreach($arr_places as $data){        
    $sql = "INSERT INTO svedenia_mest (id_seansa, zanitoe_mesta) values($id_seansa, '$data')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    echo "Заняли место : " . $data . ", result: " . $result;
}

?>