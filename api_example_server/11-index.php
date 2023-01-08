<?php

// обработка POST
if (!empty($_POST['country'])) {
    $country = $_POST['country'];
    // запрос, возвращаем города, в зависимости от города
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=kozyrev831_11111;charset=utf8", "kozyrev831_11111", "Aa111111");
    $query = "SELECT `cities` FROM `cities` WHERE country = '$country'";
    $statement = $pdo->query($query);
    $resCities = $statement->fetchAll(PDO::FETCH_ASSOC);
    // пустой массив для заполнения
    $newResCities = [];
    // преобразуем массив в более простой
    foreach ($resCities as $arr) {
        foreach ($arr as $value) {
            $newResCities[] = $value;
        }
    }
    header('Content-Type: application/json');
    $json = json_encode($newResCities, JSON_UNESCAPED_UNICODE);
    echo $json;
}
// else {
//    header('Content-Type: application/json');
//    $mess = "post - нет данных";
//    $json = json_encode($mess, JSON_UNESCAPED_UNICODE);
//    echo $json;
//}


// обработка GET
//if (!empty($_GET['num1'])&&!empty($_GET['num2'])) {
//    header('Content-Type: application/json');
//    $arr = range($_GET['num1'], $_GET['num2']);
//    echo json_encode($arr);
//}


// следующий URL возвращает все записи из БД:
if (!empty($_GET['action'])&&$_GET['action']=="all") {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=kozyrev831_11111;charset=utf8", "kozyrev831_11111", "Aa111111");
    $query = "SELECT * FROM `cities`";
    $statement = $pdo->query($query);
    $resCities = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    $arr = $resCities;
    echo json_encode($arr);
}

// возвращаем одну запись из БД:

if (!empty($_GET['action'])&&$_GET['action']=="get") {
    $id = $_GET['id'];
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=kozyrev831_11111;charset=utf8", "kozyrev831_11111", "Aa111111");
    $query = "SELECT * FROM `cities` WHERE id = '$id'";
    $statement = $pdo->query($query);
    $resCities = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    $arr = $resCities;
    echo json_encode($arr);
}




