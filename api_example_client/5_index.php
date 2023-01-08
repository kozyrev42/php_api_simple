<?php
	// запросы на дату/время
	// $url_d = 'https://kozyrev831.tmweb.ru/day.php';
	// $url_m = 'https://kozyrev831.tmweb.ru/month.php';
	// $url_y = 'https://kozyrev831.tmweb.ru/year.php';
	// $url_H = 'https://kozyrev831.tmweb.ru/hour.php';
	// $url_i = 'https://kozyrev831.tmweb.ru/min.php';
	// $url_s = 'https://kozyrev831.tmweb.ru/sec.php';
	// $res_H = file_get_contents($url_H);
	// $res_i = file_get_contents($url_i);
	// $res_s = file_get_contents($url_s);
	// $res_d = file_get_contents($url_d);
	// $res_m = file_get_contents($url_m);
	// $res_y = file_get_contents($url_y);

	// $res = "$res_H" .":". "$res_i" .":". "$res_s";
	// $res_date = "$res_d" .".". "$res_m" .".". "$res_y";
	
	// запрос + параметр (целое число)
	// $url = 'https://kozyrev831.tmweb.ru/index.php?num=9';
	// $res = file_get_contents($url);


	// запрос + параметр (день-месяц-год)
	// от даты
	$d_from = '1';
	$m_from = '1';
	$Y_from = '2024';
	// до даты
	$d_to = '1';
	$m_to = '1';
	$Y_to = '2024';
	// ответом будет количество дней между датами
	$url = "https://kozyrev831.tmweb.ru/index.php?d_from=$d_from&m_from=$m_from&Y_from=$Y_from&d_to=$d_to&m_to=$m_to&Y_to=$Y_to";
	$res = file_get_contents($url);

?>

<h1>
	<?php
		print_r($res);
	?>
</h1>