<?php

function functionName($arg1, $arg2, $agr3)
{

    $body = [$arg1, $arg2, $agr3];

    return $body;
}

function functionOption($agr1, $agr2 = true, $agr3 = null)
{
    $body = [$agr1, $agr2, $agr3];

    return $body;
}

function calcImc()
{

    global $weight;
    global $height;
    $imc = $weight / ($height * $height);

    return number_format($imc, 2);
}

function payTotal($price)
{

    static $total;
    $total += $price;
    return "<p> Total a pagar é R$" . number_format($total, 2, ",", ".") . "</p>";
}

function myTeam()
{
    $teamName = func_get_args();
    $teamCout = func_num_args();
    return ["name" => $teamName,"cout" => $teamCout];
}
