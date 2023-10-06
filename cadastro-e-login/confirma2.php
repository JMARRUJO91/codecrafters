<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | GREENCODE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            background: url("../imagens/fundodaora.jpeg");
        }

        header {
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            margin-bottom: -140px;
            margin-top:200px;
        }

        .container2 {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 600px;
            text-align: center;
            margin-bottom: 50px;
            margin-top: 200px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 70px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button-back {
            background-color: #dc3545;
            margin-left:20px;
        }

        .button-admin {
            background-color: #28a745;
        }

        footer {
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

    </style>
</head>
<body>
    <header>
       
    </header>
    <div class="container">
    <h1>Parabéns, você foi cadastrado com sucesso!</h1>
        <h2>Não esqueça seu nome de usuário e sua senha!</h2>
        <div class="button-container">
            <a class="button" href="login.php">Realizar login</a>
            <a class="button" href="cadastro.php">Cadastrar outro </a>
        </div>
    </div>
 
    <footer>
    <div class="container2">
        <a class="button button-admin" href="adm_lista.php">Painel de cadastrados</a>
        <a class="button button-back" href="login.php">Voltar</a>
    </div>
</footer>

</body>
</html>