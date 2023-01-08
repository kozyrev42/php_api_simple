<?php

// запрос на массив чисел от одного параметра до другого
$url = "http://api.kozyrev.fun/index.php?bitcoin=usd";

// результат в формате JSON, а вернее строка
$res = file_get_contents($url);
var_dump($res);

// преобразуем в массив
// $arr = json_decode($res);
// var_dump($arr);