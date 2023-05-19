<?php 

session_start();


$conn = mysqli_connect($_SESSION['serverip'],$_SESSION['username'],$_SESSION['password'],$_SESSION['database']);

if(!$conn){
    die("Ошибка подключения" . mysqli_connect_error());
}
echo "Подключено!";



$sql = "SELECT * FROM film1_mesta";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #242333;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        }
        .order,
        .result {
        float: right;
        width: 20%;
        
        }
        .movie-container {
        margin: 20px 0;
        }
        .movie-container select {
        background-color: #fff;
        border-radius: 5px;
        border: none;
        font-size: 14px;
        margin-left: 10px;
        padding: 5px 15px;
        outline: none;
        }
        .seat {
        background-color: #198bad;
        height: 19px;
        width: 20px;
        margin: 3px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        }
        .seat.selected {
        background-color: #16df16;
        }
        .seat.occupied {
        background-color: grey;
        }
        .seat:nth-of-type(2) {
        margin-right: 18px;
        }
        .seat:nth-last-of-type(2) {
        margin-left: 18px;
        }
        .seat:not(.occupied):hover {
        cursor: pointer;
        transform: scale(1.2);
        }
        .showcase .seat:not(.occupied):hover {
        cursor: default;
        transform: scale(1);
        }
        .showcase {
        background-color: rgba(0, 0, 0, 0.1);
        padding: 5px 10px;
        border-radius: 5px;
        color: #777;
        list-style: none;
        display: flex;
        justify-content: space-between;
        }
        .showcase li {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 10px;
        }
        .showcase li small {
        margin-left: 2px;
        }
        .row {
        display: flex;
        }
        .screen {
        background-color: #fff;
        height: 70px;
        width: 100%;
        margin: 15px 0;
        transform: rotateX(-45deg);
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
        }
        .container {
        perspective: 1000px;
        margin-bottom: 30px;
        }
        p.text {
        margin: 5px 0;
        }
        p.text span {
        color: #6feaf6;
        }
        .active {
        background: green;
        color: #fff;
        }
    </style>
    <title>Movie Seat Booking</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="java.js"></script>
    <div class="movie-container">
        <label> Avaliable screenings</label>
        <select id="movie">
      <option>Steve To The Rescue</option>
    </select>
    </div>
    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>
    </ul>
    <div class="container">
        <form action="obr_mesta.php" method="post">
        <div class="screen"></div>
        <div class="row">
            <?php 
            if($result = $conn ->query($sql)){
                foreach($result as $row){
                        $table_id = $row['id'];
                        $table_mesto = $row['mesto'];
                        $table_clear = $row['zanim'];
                        if($table_id >= 0  && $table_id <= 5){
                         ?>     
                <input type="checkbox" <?php echo $table_clear ?> id="<?php echo $table_mesto; ?>" class="col col-lg-1 place mx-auto" value="<?php echo $table_mesto;?>"><?php echo $table_mesto;?></input>
        <?php
                        }
                }
                $result->free();
            } else {
                echo "Ошибка:" . $conn->error;
            }   
            ?>
        </div>
        <div class="row">
            <?php 
            if($result = $conn ->query($sql)){
                foreach($result as $row){
                        $table_id = $row['id'];
                        $table_mesto = $row['mesto'];
                        $table_clear = $row['zanim'];
                        if($table_id > 5 && $table_id < 11){
                            
                        
                         ?>     
                <input type="checkbox" <?php echo $table_clear ?> class="col col-lg-1 place mx-auto <?php echo $table_clear;?>"><?php echo $table_mesto;?></input>
        <?php
                     }
                }
                $result->free();
            } else {
                echo "Ошибка:" . $conn->error;
            }   
            ?>
        </div>
        <div class="row">
            <?php 
            if($result = $conn ->query($sql)){
                foreach($result as $row){
                        $table_id = $row['id'];
                        $table_mesto = $row['mesto'];
                        $table_clear = $row['zanim'];
                        if($table_id >= 11 && $table_id <= 15){
                            
                        
                         ?>     
                <input type="checkbox" <?php echo $table_clear ?>  class="col col-lg-1 place mx-auto <?php echo $table_clear;?>"><?php echo $table_mesto;?></input>
        <?php
                     }
                }
                $result->free();
            } else {
                echo "Ошибка:" . $conn->error;
            }   
            ?>
        </div>
        
    <p class="text">You have selected <span id="count">0</span> seats
    </p>
    <div class="container order d-grid gap-2 mx-auto">
        <input class="btn btn-secondary mx-auto" type="submit" value="Confirm Booking" >
    </div>
    </form>

</body>

</html>

<?php
$conn->close();

?>