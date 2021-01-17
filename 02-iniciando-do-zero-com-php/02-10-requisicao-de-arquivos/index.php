<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

//include "file.php";
//echo "<p>Continue</p>";

include __DIR__ . "/header.php";

$profile = new stdClass();

$profile->name = "Caio";
$profile->company = "Camore";
$profile->email = "caio@camoredev.com.br";

include __DIR__ . "/profile.php";

$profile->name = "Lucas";
$profile->company = "Camore";
$profile->email = "caio@camoredev.com.br";

//include_once __DIR__ . "/profile.php";
include __DIR__ . "/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

//require "file.php";
//echo "<p>Continue</p>";

require __DIR__ . "/confi.php";

echo "<h1>" . COUSER . "</h1>";

require_once __DIR__ . "/confi.php";

var_dump(require_once __DIR__ . "/confi.php");
