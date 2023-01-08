<?php
    // отправка методом POST

    // входные данные
	$url = 'https://kozyrev831.tmweb.ru/index.php';
	$data = ['num1'=>'1', 'num2'=>'9'];

    // инициализируем CURL-сессию
	$curl = curl_init();

    // установка опций для CURL-трансфера/transfer
    // назначение url
	curl_setopt($curl, CURLOPT_URL, $url);
    // true - для возврата результата передачи в качестве строки из curl_exec() вместо прямого вывода в браузер.
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // true - для использования обычного HTTP POST.
	curl_setopt($curl, CURLOPT_POST, 1);
	
	// Все данные, передаваемые в HTTP POST-запросе.
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	
    // curl_exec - Выполняет запрос
    // функция должна вызываться после инициализации сеанса и установки всех необходимых параметров.
	$res = curl_exec($curl);
	
	var_dump($res);
?>