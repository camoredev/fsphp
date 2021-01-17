<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;
 
if ($test) {
    var_dump(true);
} else {
    var_dump(false);
};

$age = 55;

if ($age < 20) {
    var_dump("Bandas Coloridas") ;
} elseif ($age > 20 && $age < 50) {
    var_dump("Randas Raiz");
} else {
    var_dump("Rock 'n Roll Raiz");
}

$hours = 8;

if ($hours >= 5 && $hours < 23) {
    
    if ($hours <= 7) {
        var_dump("Tocando: Rock 'n Roll!");
    } else {
        var_dump("Tocando: Reggae");
    }

} else {
    var_dump("ZZZzzzZZZ!!");
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if (isset($rock)) {
    var_dump("Rock 'n Roll");
} else {
    var_dump("Die"); 
}

$rockAndRoll = "Dream Theater";

if (!empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou não está tocando!");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$paymanet = "approved";

switch ($paymanet) {
    case 'billet_printed':
        var_dump("Boleto impresso");
        break;

    case 'canceled': 
        var_dump("Pagamento cancelado");
        break;
    case 'past-due':
    case 'pending':
        var_dump("Aguardando pagamento");
        break;
    case 'approved':
    case 'completed':
        var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento");
        break;
}



