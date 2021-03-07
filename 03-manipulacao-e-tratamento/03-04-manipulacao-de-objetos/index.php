<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "Caio",
    "company" => "camore",
    "email" => "cursos@camore.com.br"
];

$objProfile = (object)$arrProfile;

//echo "<pre>";
//var_dump($arrProfile, $objProfile);
//echo "<pre>";

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}  </p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);
echo "<pre>";
var_dump($ceo);
echo "<pre>";

$company = new stdClass();
$company->company = "Camore";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Lucas";
$company->manager->mail = "cursos@camore.com.br";

var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date =  new DateTime();

echo "<pre>";
var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);
echo "</pre>";

$expetion = new PDOException();

echo "<pre>";
var_dump([
    "class" => get_class($expetion),
    "methods" => get_class_methods($expetion),
    "vars" => get_object_vars($expetion),
    "parent" => get_parent_class($expetion),
    "subclass" => is_subclass_of($expetion, "Exception")
]);
echo "</pre>";
