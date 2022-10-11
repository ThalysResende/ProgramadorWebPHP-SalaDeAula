<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
    <h1>Do While</h1>
    <p style="text-align: center;">
        Escreva um programa que exiba a tabuada de um número escolhido pelo usuário, de 1 a 10 usando for!
    </p>
        
        <?php
        // $n = $_GET["valor"];
        // $n2 = 1;
        // echo "<h1>Tabuada de 1 a 10 </h1>";
        // do{
        //     $resultado = $n * $n2;
        //     echo "$n x $n2 = $resultado <br>";
        //     $n2++;
        // }while($n2 <= 10);
        $n = $_GET["valor"];
        for ($n2 = 1; $n2 <=10; $n2++){
            $resultado = $n * $n2;
            echo "$n x $n2 = $resultado <br>";
        }
        ?>
        <br>
        <a href="exemploDoWhile4.html">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>