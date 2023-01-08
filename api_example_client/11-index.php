<?php
// POST - запрос
// $country = "сша";      // для отправки - раском
// $url = 'https://kozyrev831.tmweb.ru/index.php';

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_POST, true);

// $data = ['country' => $country];
// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// $res = curl_exec($curl);
// // преобразуем в массив
// $arr = json_decode($res, true, JSON_THROW_ON_ERROR);
// var_dump($arr);



// GET - запрос
// $num1 = '1';
// $num2 = '5';
// // запрос на массив чисел от одного параметра до другого
// $url = "https://kozyrev831.tmweb.ru/index.php?num1=$num1&num2=$num2";
// // результат в формате JSON, а вернее строка
// $resGET = file_get_contents($url);
// // преобразуем в массив
// $arrGET = json_decode($resGET);
// var_dump($arrGET);


// GET - запрос
// следующий URL возвращает все записи из БД:
// $url = "https://kozyrev831.tmweb.ru/index.php?action=all";
// $resGET = file_get_contents($url);
// // преобразуем в массив
// $arrGET = json_decode($resGET, true);
// var_dump($arrGET);


// запрос возвращает одну запись из БД по ее id:
// $url = "https://kozyrev831.tmweb.ru/index.php?action=get&id=3";
// $resGET = file_get_contents($url);
// // преобразуем в массив
// $arrGET = json_decode($resGET, true);
// var_dump($arrGET);

?>

<!-- <pre>
    <?php print_r($arrGET);?>
</pre> -->