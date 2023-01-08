<?php

$num1 = '1';
$num2 = '9';

// запрос на массив чисел от одного параметра до другого
$url = "https://kozyrev831.tmweb.ru/index.php?num1=$num1&num2=$num2";

// результат в формате JSON, а вернее строка
$res = file_get_contents($url);
var_dump($res);

// преобразуем в массив
$arr = json_decode($res);
var_dump($arr);
