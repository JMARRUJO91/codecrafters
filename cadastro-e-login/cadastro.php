<?php


    if(isset($_POST['submit']))
    {
         print_r('Nome: ' . $_POST['nome']);
         print_r('<br>');
        

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        

        $result = mysqli_query($conexao, "INSERT INTO adm(nome,senha) 
        VALUES ('$nome','$senha')");

        header('Location: cadastro.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | GREENCODE</title>
</head>
<body>
    <a href="">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Administrador</b></legend>
                <br>
                <div class="">
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome" >Nome</label>
                </div>
                <br>
                <div class="">
                    <input type="password" name="senha" id="senha" required>
                    <label for="senha" >Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>

 