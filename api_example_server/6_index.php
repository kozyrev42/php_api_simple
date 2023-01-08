<meta charset="UTF-8">
<?php

//возвращаем рандомное число в диапазоне
if (isset($_GET['num1']) && isset($_GET['num2'])) {
        echo mt_rand($_GET['num1'],$_GET['num2']);
   } else {
        echo 'error';
}
