<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO adm(nome, senha) 
    VALUES ('$nome', '$senha')");

    if ($result) {
        header('Location: confirma2.php');
        exit;
    } else {
        echo "Erro ao cadastrar o administrador. Por favor, tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | GREENCODE</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url("../imagens/fundodaora.jpeg");
        }

        div {
            background-color: rgba(0, 0, 0, 0.6);
            width: 300px;
            padding: 30px;
            border-radius: 15px;
            color: #fff;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        table tr td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 5px;
        }

        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .inputSubmit:hover {
            background-color: deepskyblue;
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
    </style>
</head>
<body background="imagens/fundodaora.jpeg">
    <div>
        <h2>Inscrição</h2>
        <form action="cadastro.php" method="POST">
            <table>
                <tr>
                    <td><label for="nome">Nome:</label></td>
                    <td><input type="text" name="nome" id="nome" required></td>
                </tr>
                <tr>
                    <td><label for="senha">Senha:</label></td>
                    <td><input type="password" name="senha" id="senha" required></td>
                </tr>
            </table>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Cadastrar">
            <br>
            <a class="inputReturn" href="../inscricoes.php">Voltar</a>
        </form>
    </div>
</body>
</html>
