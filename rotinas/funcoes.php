<?php
//Informar o local do projeto
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("America/Sao_Paulo");
echo date_default_timezone_get();
echo "<br>";
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
        echo "<br><hr>";
        $numero_linha--;      
        } while($numero_linha >= 1);
}

function soma($a, $b) {   
    $resultado = $a + $b; 
    echo "O resultado da soma é: <span style='color: green;'>$resultado</span>";
    pule_linha(0);
}

function subtração($a, $b) {   
    $resultado = $a - $b; 
    echo "O resultado da subtração é: <span style='color: green;'>$resultado</span>";
    pule_linha(0);
}

function múltiplicação($a, $b) {   
    $resultado = $a * $b; 
    echo "O resultado da múltiplicação é: <span style='color: green;'>$resultado</span>";
    pule_linha(0);
}

function divisão($a, $b) {   
    $resultado = $a / $b;  
    if ($resultado == 0) {
        echo "Resultado da divisão é: <span style='color: green;'>$resultado</span>";
        pule_linha(0);
    } else {
        echo "Resultado da divisão é: <span style='color: green;'>$resultado</span>";
        pule_linha(0);
    }
}

function generating_rand($num, $array_s) {
    for ($i = 0; $i < $array_s; $i++) { 
        do {
            $random = rand(1, 1000);
        } while (($random % 2) == 1);
            $num[] = $random;
    }
    asort($num);
    print_r($num);
}