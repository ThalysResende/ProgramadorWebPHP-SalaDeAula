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
<p>Escreva um programa que leia
o preço e a quantidade de produtos comprados.

O programa deverá calcular um desconto de
10% no valor total a ser pago se o
valor do produto for maior que 300.

O programa deverá calcular um 
desconto de 7% no valor total 
a ser pago se o número de produtos
comprados for maior que 5.

O programa deverá calcular e imprimir o valor
total a ser pago com os possíveis descontos.
    </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Dados do Produto</legend>
    <?php
        $valor = $_GET["valor"];
        $qtd = $_GET["qtd"];

        $total = $valor * $qtd;
        $desconto = 0;
        $desconto_seven = 0;
        $valor_total_desconto = 0;

        if ($valor > 300) {
            $desconto == ($valor * 10) / 100;
        }
        if ($valor > 5) {
            $desconto_seven = ($valor * 7) / 100;
        }

        $valor_total_desconto = $valor - $desconto - $desconto_seven;
    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog5.html">Voltar</a>
    
</div>
</body>
</html>