<?php
    // распаковываем 'json'
    // считаем сумму элементов
    echo array_sum(json_decode($_POST['json'], true));
?>