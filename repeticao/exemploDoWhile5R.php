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
        Escreva um número, para verificar se o mesmo é um número Primo.
        <br>Os Números Primos são números naturais maiores do que 1 que
        possuem somente dois divisores, ou seja, são divisíveis por
        1 e por ele mesmo.
    </p>
        
        <?php
        // $n = isset($_POST["numero"]) ? $_POST["numero"] : 0;
        $n = $_POST["numero"];
        $qtd = 0;

        echo "<h2>Analisando o número $n...</h2>";
        echo "<h2>Valores múltiplos: ";
        for($i = 1; $i <= $n; $i++) {
            if($n % $i == 0){
                echo "$i ";
                $qtd++;
            }
        }
        echo " </h2>";
        echo "<h2>Total de múltiplos: $qtd</h2>";
        echo "<h2>Resultado: $n - ".(($qtd > 2) ? "Não é primo!" : "É Primo!") ."</h2>";
       
        // $n = $_GET["valor"];
        // $n2 = 0;
        // for($c = 2; $c < $n; $c++)
        // if($n % $c == 0){
        //     echo "Multiplo de $c<br />";
        //     $n2++;
        // }
        // if($n2)  
        // echo "Não é primo, tem $n2 divisor além de 1 e ele mesmo";
        // else    
        // echo "É primo!";
        
        ?>
        <br>
        <a href="exemploDoWhile5.html">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>