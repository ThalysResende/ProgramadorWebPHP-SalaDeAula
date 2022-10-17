<?php
//Informar o local do projeto
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("America/Sao_Paulo");
echo date_default_timezone_get();
echo "<br>";

function escreva_texto() {
    echo "<h4 style='text-align: center;'>Minha primeira função em PHP</h4>";
}

function escreva_texto2 ($qualquer_coisa) {
    echo "<p style='text-align: center;'>$qualquer_coisa</p>";
}

function hoje() {
    $agora = date('d/m/Y H:i');
    echo "<p style='text-align: center;'>$agora</p>";
}

function pule_linha($numero_linha) {
    // $pule_linha = 1;
    //if($numero_linha < 1) {echo "<br>";} else {for($i=1; $i <= $numero_linha; $i++){echo "<br>";}}    
        do {    
        echo "<br>.";
        $numero_linha--;      
        } while($numero_linha >= 1);
}