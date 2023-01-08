<meta charset="UTF-8">

<?php
	date_default_timezone_set('Asia/Novosibirsk');
?>

<!--получим данные через гет-запрос-->
<?php
if (isset($_GET['d_from']) &&
    isset($_GET['m_from']) &&
    isset($_GET['Y_from']) &&
    isset($_GET['d_to']) &&
    isset($_GET['m_to']) &&
    isset($_GET['Y_to'])) {
    $fromDay = $_GET['d_from']."-".$_GET['m_from']."-".$_GET['Y_from'];
    $toDay = $_GET['d_to']."-".$_GET['m_to']."-".$_GET['Y_to'];

    // получаем разницу в днях
    $differenceDay = (strtotime ("$toDay")-strtotime ("$fromDay"))/(60*60*24);
    echo "$differenceDay";

   } else {
        echo 'error';
}

