<?php

$num1 = '11';
$num2 = '15';

// ответом на запрос будет случайное число в пределах от $num1 до $num2
$url = "https://kozyrev831.tmweb.ru/index.php?num1=$num1&num2=$num2";
$res = file_get_contents($url);
?>

<h1>
	<?php
		print_r($res);
	?>
</h1>