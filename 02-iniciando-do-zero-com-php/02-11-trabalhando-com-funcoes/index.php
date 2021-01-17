<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__ . "/function.php";

echo "<pre>";
var_dump(functionName("Dream Theater", "The Winery Dogs", "Alter bridge"));
var_dump(functionName("Caio Moraes", "Fran Souza", "Pedro Henrique"));
echo "</pre>";

echo "<pre>";
var_dump(functionOption("Caio Moraes"));
var_dump(functionOption("Caio Moraes", "Fran Souza"));
var_dump(functionOption("Caio Moraes", "Fran Souza", "Pedro Herinque"));
echo "</pre>";

$weight = 85;
$height = 1.75;
echo calcImc();

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);


/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);


/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);
