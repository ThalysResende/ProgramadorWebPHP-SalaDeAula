<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
<p>Escreva um programa  que leia um número.
O programa deverá verificar se o
mesmo é válido. Número válido está entre 0 e 10. O programa deverá imprimir válido ou inválido.
    </p>
    <hr/>
    <h2 style="text-align: center">Verificando Números</h2>
    <fieldset>
        <legend>Número Verificado</legend>
    <?php
        $numero = $_GET["n"];
        
        if (($numero >= 0) && ($numero <= 10)) {
           echo "<h1  style='text-align: center'>Válido!</h1>";
        } else {
            echo "<h1  style='text-align: center'>Inválido!</h1>";
        }
        
    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog8.html">Voltar</a>
    
</div>
</body>
</html>