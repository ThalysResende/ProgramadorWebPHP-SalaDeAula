<?php

// function verifica_cpf($cpf) {
//     if (strlen($cpf) < 14) {
//         return false;
//     } else {
//         return true;
//     }
// }

function verifica_cpf($cpf) {
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    if (strlen($cpf) != 11) {
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    for ($i = 9; $i < 11; $i++) { 
       for ($l = 0, $c = 0; $c < $i; $c++) {
        $l += $cpf[$c] * (($i + 1) -$c);
       }
       
       $l = ((10 * $l) % 11) % 10;
       if ($cpf[$c] != $l) {
            return false;
       } 
    }
    return true;
}

// function verifica_cpf($cpf) {
//     $cpf = preg_replace('/\D/', '', $cpf);

//     if (strlen($cpf) != 11) {
//         return false;
//     }

//     if (preg_match('/(\d)\1{10}/', $cpf)) {
//         return false;
//     }

//     $n = substr($cpf, 0, 9);
//     $t = strlen($n);
//     $m = $t + 1;
//     $s = 0;

//     for ($i=0; $i < $t; $i++) { 
//         $s += $n[$i] * $m;
//         $m--;
//     }

//     $r = $s % 11;
//     return $r > 1 ? 11 - $r : 0;
       
// }