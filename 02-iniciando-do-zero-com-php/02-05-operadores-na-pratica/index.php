<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operators =[
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5),

];
echo "<pre>", var_dump($operators),"</pre>";

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pós-incremento" =>$incrementA++,
    "res-incremento" =>$incrementA,
    "pre-incremento" =>++$incrementA,
    "pós-decremento" =>$incrementB--,
    "res-decremento" =>$incrementB,
    "pre-decremento" =>--$incrementB,
];

echo "<pre>", var_dump($increment), "</pre>";

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
    "a == b" => $relatedA == $relatedB, //Compara se o valor de A é igual a B
    "a === b" => $relatedA == $relatedB, //Compara se o valor de A é igual a B e se tem o msm tipo
    "a != b" => $relatedA == $relatedB, //Compara se o valor de A é diferente de B
    "a > c" => $relatedA > $relatedC, //compara se o valor de A é maior que C
    "a < c" => $relatedA < $relatedC, //compara se o valor de A é menor que C
    "a >= b" => $relatedA >= $relatedB, //compara se o valor de A é maior ou igual que B
    "a >= c" => $relatedA >= $relatedC, //compara se o valor de A é maior ou igual que C
    "a <= c" => $relatedA <= $relatedC, //compara se o valor de A é menor ou igual que C
];

echo "<pre>", var_dump($related), "</pre>";

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic =[
    "a && b" => $logicA && $logicB,
    "a || b" => $logicA || $logicB,
    "a" => $logicA,
    "! a" => !$logicA,
    "! b" => !$logicB
];

echo "<pre>", var_dump($logic), "</pre>";
/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;
$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];

echo "<pre>", var_dump($calc) ,"</pre>";
