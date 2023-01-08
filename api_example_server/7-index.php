<?php

// API отдает данные в формате JSON
// Заголовок отправляет заголовок http json в браузер, чтобы сообщить ему, какие данные он ожидает
header('Content-Type: application/json'); // укажем MIME

$arr = range($_GET['num1'], $_GET['num2']);
// json_encode() Возвращает строку (string), закодированную JSON
echo json_encode($arr);
?>