<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>



        <h1 style="text-align: center;">
            Procedimentos, funções e métodos.
        </h1>
        <h4 style="text-align: center;">Testando Funções</h4>
        <hr>
        <br>
        <pre>
        <?php
        
        include "funcoes.php";

        escreva_texto();
        echo "<br>";
        escreva_texto2("Thalys");
        echo "<br>";
        hoje();
        pule_linha(0);
        echo "<br>";
        soma(6, 6);
        echo "<br>";
        subtração(6, 6);
        echo "<br>";
        múltiplicação(6, 6);
        echo "<br>";
        divisão(10, 10);
        echo "<br>";
        generating_rand(array(), 10);
        // var_dump(pule_linha(5));

        ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>