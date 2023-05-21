<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="SHORTCUT ICON" href="../favicon.ico" />
  <link rel="icon" href="../favicon.ico" type="image/ico" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/mesta.css"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Бронирование мест</title>
</head>

<body>

<?
include_once '../db_settings.php';

$id_seansa = $_GET['id_seansa'];
$sql = "SELECT *,raspisanie.id'seans_id',name_film.name'film_name',adresa.name'adres_name' FROM name_film 
    LEFT JOIN opisaniefilma ON name_film.id=opisaniefilma.id_filma 
    LEFT JOIN raspisanie ON name_film.id = raspisanie.id_filma
    LEFT JOIN adresa ON raspisanie.id_adressa=adresa.id
    WHERE raspisanie.id = $id_seansa
    ORDER BY name_film.id, raspisanie.id_adressa,raspisanie.time";

if($result = mysqli_query($conn, $sql)){ 
    foreach($result as $row){        
        echo "Фильм: ". $row["film_name"]."</br>";
        ?>  <div></div>
            <div></div>
            <div></div>
        
        
        <?
        echo "Адрес: ". $row["adres_name"]."</br>";
        echo "Время: ". $row["time"]."</br>";
    }
}
?>

<ul class="showcase">
    <li>
      <div class="seat"></div>
      <small>Свободно</small>
    </li>
    <li>
      <div class="seat selected"></div>
      <small>Выбрано</small>
    </li>
    <li>
      <div class="seat occupied"></div>
      <small>Занято</small>
    </li>
  </ul>
  <div class="container">
    <div class="screen"></div>
    <div class="row">
        <p>Ряд 1</p>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A1">1</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A2">2</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A3">3</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A4">4</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A5">5</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A6">6</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A7">7</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A8">8</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A9">9</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A10">10</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A11">11</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A12">12</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A13">13</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A14">14</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A15">15</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="A16">16</a>
    </div>
    <div class="row">
    <p>Ряд 2</p>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B1">1</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B2">2</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B3">3</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B4">4</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B5">5</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B6">6</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B7">7</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B8">8</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B9">9</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B10">10</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B11">11</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B12">12</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B13">13</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B14">14</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B15">15</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="B16">16</a>
    </div>
    <div class="row">
    <p>Ряд 3</p>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C1">1</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C2">2</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C3">3</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C4">4</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C5">5</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C6">6</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C7">7</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C8">8</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C9">9</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C10">10</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C11">11</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C12">12</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C13">13</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C14">14</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C15">15</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="C16">16</a>
    </div>
    <div class="row">
    <p>Ряд 4</p>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D1">1</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D2">2</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D3">3</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D4">4</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D5">5</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D6">6</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D7">7</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D8">8</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D9">9</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D10">10</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D11">11</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D12">12</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D13">13</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D14">14</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D15">15</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="D16">16</a>
    </div>
    <div class="row">
    <p>Ряд 5</p>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I1">1</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I2">2</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I3">3</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I4">4</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I5">5</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I6">6</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I7">7</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I8">8</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I9">9</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I10">10</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I11">11</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I12">12</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I13">13</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I14">14</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I15">15</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="I16">16</a>
    </div>
    <div class="row">
    <p>Ряд 6</p>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F1">1</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F2">2</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F3">3</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F4">4</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F5">5</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F6">6</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F7">7</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F8">8</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F9">9</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F10">10</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F11">11</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F12">12</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F13">13</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F14">14</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F15">15</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="F16">16</a>
    </div>
    <div class="row">
    <p>Ряд 7</p>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G1">1</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G2">2</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G3">3</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G4">4</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G5">5</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G6">6</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G7">7</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G8">8</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G9">9</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G10">10</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G11">11</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G12">12</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G13">13</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G14">14</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G15">15</a>
      <a class="col col-lg-1 place mx-auto unbooked seat" id="G16">16</a>
    </div>

  </div>
  <div class="container order d-grid gap-2 mx-auto">
    <!--<input class="btn btn-secondary mx-auto" type="button" value="Забронировать" id="submit">-->
    <button class="btn btn-secondary mx-auto" type="button" value="Забронировать" id="submit" style="
    position: absolute; font-family: 'Jura'; font-style: normal; font-weight: 400; font-size: 24px; line-height: 28px; color: rgba(255, 255, 255, 0.98); width: 313px; height: 59px; background: #6B8BFE; border-radius: 24px; text-align: center;">
    Забронировать</button>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../script/java.js"></script>
</body>

</html>