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

        header('Location: formulario.php');
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
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url("../imagens/fundodaora.jpeg");
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
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            height: 50px;
            border: none;
            text-decoration: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-top: 20px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
        .button-listar {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            margin-top: 20px;
        }
        .button-listar:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        .button-voltar {
            background-color: #dc3545;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            margin-top: 20px;
        }
        .button-voltar:hover{
            background-color: #a3232e;
            cursor: pointer;
        }

        .inputReturn {
            background-color: #dc3545;
            border: none;
            padding: 15px;
            width: 80%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s;

        }

        .inputReturn:hover {
            background-color: #a3232e;
        }

        .inputReturn1 {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s;

        }

        .inputReturn2 {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .inputReturn3 {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .inputReturn1:hover {
            background-color:green;
        }

        .inputReturn2:hover {
            background-color:#42426F;
        }

        .inputReturn3:hover {
            background-color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Adicionar equipe</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomes" id="nomes" class="inputUser" required>
                    <label for="nomes" class="labelInput">Nome dos participantes:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="equipe" id="equipe" class="inputUser" required>
                    <label for="equipe" class="labelInput">Nome da equipe:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modalidade" id="modalidade" class="inputUser" required>
                    <label for="modalidade" class="labelInput">Modalidade:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="serie" id="serie" class="inputUser" required>
                    <label for="serie" class="labelInput">Série:</label>
                </div>
                <br><br>
                <input class="inputReturn1" type="submit" name="submit" value="Enviar">
<br><br>
                <a class="inputReturn2" href="indi_lista.php">Equipes</a>
            <br><br><br>
            <a class="inputReturn3" href="confirma.php">Voltar</a>
            <br><br>
            </fieldset>
        </form>
    </div>
</body>