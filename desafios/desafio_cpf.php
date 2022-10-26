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
    <script>
        function validar() {
            var msg = "";
            var flag = 0;

            if(f.nome.value == "") {
                flag = 1;
                msg1 = "Preencha o campo Nome!";
            }
            
            if(f.cpf.value == "") {
                flag = 1;
                msg2 = "Preencha o campo CPF!";
            }
            
            if(f.email.value == "") {
                flag = 1;
                msg3 = "Preencha o campo E-mail!";
            }
            
            if(f.tel.value == "") {
                flag = 1;
                msg4 = "Preencha o campo Telefone!";
            }

            // if (flag == 0) {
            //     document.getElementById("resposta").style.display = 'none';
            //     return true;
            // } else {
            //     document.getElementById("resposta").style.display = 'block';
            //     document.getElementById("resposta").innerHTML = msg;
            //     return false;
            // }

            if (flag == 0) {
                document.getElementById("n").style.display = 'none';
                document.getElementById("c").style.display = 'none';
                document.getElementById("e").style.display = 'none';
                document.getElementById("t").style.display = 'none';
                return true;
            } else {
                document.getElementById("n").style.display = 'block';
                document.getElementById("c").style.display = 'block';
                document.getElementById("e").style.display = 'block';
                document.getElementById("t").style.display = 'block';
                document.getElementById("n").innerHTML = msg1;
                document.getElementById("c").innerHTML = msg2;
                document.getElementById("e").innerHTML = msg3;
                document.getElementById("t").innerHTML = msg4;
                return false;
            }
            
            // if (flag == 0) {
            //     document.getElementById("c").style.display = 'none';
            //     return true;
            // } else {
            //     document.getElementById("c").style.display = 'block';
            //     document.getElementById("c").innerHTML = msg2;
            //     return false;
            // }

        }

        function mascaraC(i) {
            // console.log(i);
            // console.log(i.value);
            var v = i.value;

            if (isNaN(v[v.length -1])) {
                i.value = v.substring(0, v.length -1);
                return;
            }
            i.setAttribute("maxlength", 14);
            if (v.length == 3 || v.length == 7) {i.value += ".";}
            if (v.length == 11) i.value += "-";
        }
        
        function mascaraT(i) {
            var v = i.value;

            if (isNaN(v[v.length -1])) {
                i.value = v.substring(0, v.length -1);
                return;
            }
            i.setAttribute("maxlength", 14);
            if (v.length == 1) {i.value = "(" + v;}
            if (v.length == 3) i.value += ") ";
            if (v.length == 9) i.value += "-";
        }

    </script>
    
</head>

<body>
    <div>

        <h1 style="text-align: center;">
            Cadastro de Aluno.
        </h1>
        <hr>

        <!-- <section id="resposta" class="alert alert-danger" role="alert" style="display: none;">
        
        </section> -->

        <form action="desafio_cpf_recebido.php" method="post" name="f" onsubmit="return validar()">
            
            <br>
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control">
            
            <span id="n" style="color: red; display: none; font-size: 13px; padding-top: 10px;"></span>
            <br>
            <label class="form-label">CPF:</label>
            <input type="text" name="cpf" class="form-control" oninput="mascaraC(this)">
            
            <span id="c" style="color: red; display: none; font-size: 13px; padding-top: 10px;"></span>
            <br>
            <label class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control" placeholder="@">
            
            <span id="e" style="color: red; display: none; font-size: 13px; padding-top: 10px;"></span>
            <br>
            <label class="form-label">Telefone:</label>
            <input type="text" name="tel" class="form-control" placeholder="(00) 0000-0000" oninput="mascaraT(this)">
            
            <span id="t" style="color: red; display: none; font-size: 13px; padding-top: 10px;"></span>
            <br>
            <br>
            <input type="submit" value="Enviar" class"btn-control">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>