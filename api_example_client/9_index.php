<meta charset="utf-8">
<?php
    // входные данные
	$url = 'https://kozyrev831.tmweb.ru/index.php';
    $arr  = [1, 2, 3, 4, 5];
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	
	// массив пакуем в json
	$json = json_encode($arr);

    // json - оборачиваем в массив, 
	$data = ['json' => $json];
	// помещаем в $curl данные $data
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	
    // отправка запроса, сохранение результата
	$res = curl_exec($curl);
	
	var_dump($res);
?>