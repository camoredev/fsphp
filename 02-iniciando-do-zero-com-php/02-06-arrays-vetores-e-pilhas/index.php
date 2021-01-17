<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1, 2, 3);

echo "<pre>", var_dump($arrA), "</pre>";

$arrayIndex =[
  "Brian",
  "Argus",
  "Malcon"
];

$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

echo "<pre>", var_dump($arrayIndex), "</pre>";


/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guittar" => "Argus",
    "base_guittar" => "Malcoln",
    "bass_guittar" => "Cliff"
];

$arrayAssoc["drums"]= "Phill";
$arrayAssoc["rock_baands"] = "AC/DC";

echo "<pre>", var_dump($arrayAssoc), "</pre>";

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);
$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guittar"];

$instruments = [
    $brian,
    $angus
];

echo "<pre>", var_dump($instruments), "</pre>";

echo "<pre>", var_dump([
    "brian" => $brian,
    "angus" => $angus
]), "</pre>";

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guittar" => "Argus",
    "base_guittar" => "Malcoln",
    "bass_guittar" => "Cliff",
    "drums" => "Phil"
];

$pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guittar" => "Mike",
    "base_guittar" => "Stone",
    "bass_guittar" => "jaff",
    "drums" => "Jack" 
];

echo "<p> O vocal da banda AC/DC é {$acdc["vocal"]},  e juntos com {$acdc["solo_guittar"]} fazem uma ótimo show de rock</p>";

$rockBands =[
    "acdc" => $acdc,
    "pearl" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands["pearl"]["vocal"]}</p>";

foreach ($acdc as $itens){
    echo "<p>{$itens}</p>";
};

foreach ($acdc as $key => $value) {
    echo "<p>{$value} a is {$key} of bands</p>";
}

foreach ($rockBands as $rockBand) {
       $art = "<article><h1>%s</h1><p>Integrantes:</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
       vprintf($art, $rockBand);  
};