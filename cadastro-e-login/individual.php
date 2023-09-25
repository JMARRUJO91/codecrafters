<?php
//INDIVIDUAL
if(isset($_POST['submit']))
{
     print_r('Nome: ' . $_POST['nome']);
     print_r('<br>');
     print_r('Modalidade: ' . $_POST['modalidade']);
     print_r('<br>');
    
     include_once('config.php');

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $modalidade = $_POST['modalidade'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $serie = $_POST['serie'];
    $telefone = $_POST['telefone'];
    

    $result = mysqli_query($conexao, "INSERT INTO individual(nome,idade,modalidade,email,cidade,serie,telefone) 
    VALUES ('$nome','$idade','$modalidade','$email','$cidade','$serie','$telefone')");

    header('Location: individual.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GREENCODE</title>
    
</head>
<body>
    <a href="login_adm.php">Voltar</a>
    <div>
        <form action="individual.php" method="POST">
            <fieldset>
                <legend><b>Inscrição Individual</b></legend>
                <br>
                <div class="">
                    <input type="text" name="nome" id="nome" class="" required>
                    <label for="nome" class="">Nome</label>
                </div>
                <br><br>
                <div class="">
                    <input type="text" name="idade" id="idade" class="" required>
                    <label for="idade" class="">Idade</label>
                </div>
                <br><br>
                <div class="">
                    <input type="text" name="modalidade" id="modalidade" class="" required>
                    <label for="modalidade" class="">Modalidade</label>
                </div>
                <br><br>
                <div class="">
                    <input type="text" name="email" id="email" class="" required>
                    <label for="email" class="">Email</label>
                </div>
                <br></br>
                <div class="">
                    <input type="text" name="cidade" id="cidade" class="" required>
                    <label for="cidade" class="">Cidade</label>
                </div>
                <br></br>
                <div class="">
                    <input type="text" name="serie" id="serie" class="" required>
                    <label for="serie" class="">Série</label>
                </div>
                <br></br>
                <div class="">
                    <input type="text" name="telefone" id="telefone" class="" required>
                    <label for="telefone" class="">Telefone</label>
                </div>
                <br></br>
<section>
    <input class="" type="submit" name="submit" value="Enviar">
    <button type="submit" name="submit" value=""><a href="lista.php">Competidores</a></button>
</section>
            </fieldset>
        </form>
    </div>
</body>
</html>
