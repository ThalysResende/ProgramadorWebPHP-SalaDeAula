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
<p>Escreva um programa  que leia 3 números. O programa deverá verificar qual o maior entre os 3.
    </p>
    <hr/>
    <h2 style="text-align: center">Verificando Números</h2>
    <fieldset>
        <legend>Número Verificado</legend>
    <?php
        
        $numero1 = $_GET["n1"];
        $numero2 = $_GET["n2"];
        $numero3 = $_GET["n3"];
        
        if (($numero1 <= $numero2) || ($numero1 <= $numero3)) {
        } else {
            echo "<h1 style='text-align: center'> $numero1 </h1>";
        }

        if (($numero2 <= $numero1) || ($numero2 <= $numero3)) {
        } else {
            echo "<h1 style='text-align: center'> $numero2 </h1>";
        }
        
        if (($numero3 <= $numero1) || ($numero3 <= $numero2)) {
        } else {
            echo "<h1 style='text-align: center'> $numero3 </h1>";
        }
        
    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog7.html">Voltar</a>
    
</div>
</body>
</html>