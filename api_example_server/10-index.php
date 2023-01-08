<?php

// принимаем страну
$country = $_POST['country'];

// подключаемся к базе
// запрос, возвращаем города, в зависимости от города
$pdo = new PDO("mysql:host=127.0.0.1;dbname=kozyrev831_11111;charset=utf8", "kozyrev831_11111", "Aa111111");
$query = "SELECT `cities` FROM `cities` WHERE country = '$country'";
$statement = $pdo->query($query);
$resCities = $statement->fetchAll(PDO::FETCH_ASSOC);

// пустой массив для заполнения
$newResCities = [];

// преобразуем массив в более простой
foreach ($resCities as $arr){
    foreach ($arr as $value) {
        $newResCities[]=$value;
    }
}

// клиент получит json
header('Content-Type: application/json');
// кодирование в json флаг для кириллици
$json = json_encode($newResCities, JSON_UNESCAPED_UNICODE);

echo $json;
exit();