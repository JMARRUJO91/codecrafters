session_start



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de alteração</title>
    <style>
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
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
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 88%;
            margin-bottom: 15px;
            border-radius: 10px;
            margin-right: 30px;
        }

        .inputSubmit {
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

        .inputSubmit:hover {
            background-color: deepskyblue;
        }

        a.inputSubmit {
            background-color: #dc3545;
            text-decoration: none;
        }

        a.inputSubmit:hover {
            background-color: #a3232e;
        }
    </style>
</head>
<body>
    <div>
        <h1>CONFIRMAÇÃO<BR>Logue<br>Com esta conta<br>Para deletá-la!</h1>
        <form action="testLogin3.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        <a class="inputSubmit" href="../inscricoes.php">Voltar</a>
    </div>
</body>
</html>