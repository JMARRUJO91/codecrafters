<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nomes = $_POST['nomes'];
        $equipe = $_POST['equipe'];
        $modalidade = $_POST['modalidade'];
        $serie = $_POST['serie'];
        $result = mysqli_query($conexao, "INSERT INTO coletivo(nomes,equipe,modalidade,serie) 
        VALUES ('$nomes','$equipe','$modalidade','$serie')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            height: 200px
            border: none;
            text-decoration: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

        .botaolistar{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .botaolistar:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="../inscricoes.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Adicionar equipe</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomes" id="nomes" class="inputUser">
                    <label for="nome" class="labelInput">Nome dos participantes:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="equipe" id="equipe" class="inputUser" >
                    <label for="senha" class="labelInput">Nome da equipe:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modalidade" id="modalidade" class="inputUser" value=>
                    <label for="email" class="labelInput">Modalidade:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="serie" id="serie" class="inputUser">
                    <label for="email" class="labelInput">Série:</label>
                </div>
                <br><br>
                <input class="botaolistar" type="submit" name="submit" value="Enviar">
    <a class="botaolistar" href="sistema.php">Equipes</a></button>
    <a class="botaolistar" href="confirma.php">Voltar</a></button>
                
            </fieldset>
        </form>
    </div>
</body>
</html>