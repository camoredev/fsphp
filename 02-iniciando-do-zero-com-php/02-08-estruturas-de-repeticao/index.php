<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

while ($looping <= 5) {
    $while[] = $looping;
    $looping++;
}

echo "<pre>", var_dump($while), "</pre>";

$looping = 5;
$while = [];

do {
    $while[] = $looping;
    $looping--;
} while ($looping >= 1);


echo "<pre>", var_dump($while), "</pre>";

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for ($i = 1; $i <= 10; $i++) {
    echo "<p>{$i}</p>";
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for ($c = 1; $c <= 10; $c++) {
    if ($c % 2 == 1) {
        continue;
    };

    if ($c >= 7) {
        break;
    };

    echo "<p>pulou +2<br> VALOR:{$c}</p>";
}
/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$array = [];

for ($arr = 0; $arr <= 2; $arr++) {
    $array[] = $arr;
};

echo "<pre>", var_dump($array), "</pre>";

foreach ($array as $itens) {
    echo "<pre>", var_dump($itens), "</pre>";
}

foreach ($array as $key => $value) {
    echo "<pre>", var_dump("{$key} = {$value}"), "</pre>";
}
