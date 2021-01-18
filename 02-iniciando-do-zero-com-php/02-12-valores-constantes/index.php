<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
define("COUSER", "Full Stack PHP");
const AUTHOR = "Robson";

$formation = true;
if ($formation) {
    define("COUSER_TYPE", "Formação");
} else {
    define("COUSER_TYPE", "Curso");
}

echo "<p>" . COUSER," " ,COUSER_TYPE, " de ", AUTHOR . "</p>";

class Config
{
    const USER = "root";
    const HOST = "localhost";
}

echo "<p>" . Config::USER . "</p>";
echo "<p>" . Config::HOST . "</p>";

var_dump(get_defined_constants(true)["user"]);

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

echo "<pre>";
var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);
echo "</pre>";


function fullStackPHP()
{
    return __FUNCTION__;
}

echo fullStackPHP();

trait MyTrait
{
    public $traitName = __TRAIT__;
}

class FsPHP
{
    use MyTrait;

    public $clasName = __CLASS__;
}

var_dump(new FsPHP());
