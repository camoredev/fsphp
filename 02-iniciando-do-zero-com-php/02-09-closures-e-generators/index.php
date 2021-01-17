<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year) {
    $age = date("Y") -  $year;
    return "<p>Você tem {$age} anos</p>";
};

echo $myAge(1995);

$priceBrl = function ($price) {
    return number_format($price, 2, ",", ".");
};

echo "<p>O prjeto custa {$priceBrl(3600)}</p>";

$myCart = [];
$myCart["totalPrice"] = 0;

$cardAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5", 1, 497);
$cardAdd("Elementor Builder", 1, 297);
$cardAdd("Agencia de Valor", 1, 2997);


echo "<pre>", var_dump($myCart), "</pre>";


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$interator = 4000000;

$saveDate = [];
function showDates($days)
{
    for ($day = 0; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$days} dias"));
    }

    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates(1) as $date) {
    echo "<small class='tag'> {$date} </small>" . PHP_EOL;
}
echo "</div>";

function gerenetorDATE($days)
{
    for ($day = 0; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$days} dias"));
    }
}

echo "<div style='text-align: center'>";
foreach (gerenetorDATE($interator) as $date) {
    echo "<small class='tag'> {$date} </small>" . PHP_EOL;
}
echo "</div>";
