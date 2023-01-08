<?php
// входные данные
$url = 'https://kozyrev831.tmweb.ru/index.php';
$country  = "сша";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);

// по ключу на сервере, будем читать данные
$data = ['country' => $country];
// помещаем в $curl данные $data
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// отправка запроса, сохранение результата
$res = curl_exec($curl);

// преобразуем в массив
$arr = json_decode($res, true, JSON_THROW_ON_ERROR);
var_dump($arr);
	