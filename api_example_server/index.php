
<h4>получаю курс крипты в реальном времени</h4>
<h4>при обновлении страницы, курс обновляется</h4>
<h4>данные можно записывать в базу</h4>
<?php
$url = "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH&tsyms=USD,EUR,RUB";
$resGET = file_get_contents($url);
// преобразуем в массив
$arrGET = json_decode($resGET, true);
?>

<pre>
    <?php print_r($arrGET);?>
</pre>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.5330754418346!2d30.32900691355029!3d60.05114525268897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469634c19ca6fb59%3A0x83d29c55f81e1112!2z0J_RgNC-0YHQv9C10LrRgiDQn9GA0L7RgdCy0LXRidC10L3QuNGP!5e1!3m2!1sru!2sru!4v1669128003285!5m2!1sru!2sru" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>