<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge"
];

// adicionar um valor ao inicio do array
array_unshift($index, "", "Pearl Jam");
$assoc = ["band_4" => "Pearl Jam", "band_5" => ""] + $assoc;

//adicionar valor ao final do array
array_push($index, "");
$assoc = $assoc + ["band_6" => ""];

//remover valores do inico da array
array_shift($index);
array_shift($assoc);

//remover valores do final da array
array_pop($index);
array_pop($assoc);

array_unshift($index, "");

//filtrar valores vazios na array

$index = array_filter($index);
$assoc = array_filter($assoc);

echo "<pre>";
var_dump([
    $index,
    $assoc
]);
echo "</pre>";

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

//inverte valores do array
$index = array_reverse($index);
$assoc = array_reverse($assoc);

//ordena array sem afertar os chaves
asort($index);
asort($assoc);

//ordenação por indices(chaves)
ksort($index);//ordenação crescente
krsort($index);//ordenação descrescente


echo "<pre>";
var_dump([
    $index,
    $assoc
]);
echo "</pre>";

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);


/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);
