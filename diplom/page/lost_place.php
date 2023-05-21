<?

include_once '../db_settings.php';

$id_seansa = $_POST['id_seansa'];

$sql = "SELECT zanitoe_mesta FROM  svedenia_mest WHERE svedenia_mest.id_seansa = $id_seansa";

if($result = mysqli_query($conn, $sql)){ 
    $array = array();
    if($result = mysqli_query($conn, $sql)){
        foreach($result as $row){
            $array[] = $row["zanitoe_mesta"];
        }
    }
    
    echo json_encode($array);
}
?>