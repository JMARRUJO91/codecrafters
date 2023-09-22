<?php
//COLETIVO
    if(isset($_POST['submit']))
    {
         print_r('Nomes: ' . $_POST['nomes']);
         print_r('<br>');
         print_r('Equipe: ' . $_POST['equipe']);
         print_r('<br>');
        

        include_once('config.php');

        $nomes = $_POST['nomes'];
        $equipe = $_POST['equipe'];
        $modalidade = $_POST['modalidade'];
        $serie = $_POST['serie'];
        

        $result = mysqli_query($conexao, "INSERT INTO coletivo(nomes,equipe,modalidade,serie) 
        VALUES ('$nomes','$equipe','$modalidade','$serie')");

        header('Location: formulario.php');
    }
//INDIVIDUAL
if(isset($_POST['submit']))
{
     print_r('Nome: ' . $_POST['nome']);
     print_r('<br>');
     print_r('Modalidade: ' . $_POST['modalidade']);
     print_r('<br>');
    

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $modalidade = $_POST['modalidade'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $serie = $_POST['serie'];
    $telefone = $_POST['telefone'];
    

    $result = mysqli_query($conexao, "INSERT INTO individual(nome,idade,modalidade,email,cidade,serie,telefone) 
    VALUES ('$nome','$idade','$modalidade','$email','$cidade','$serie','$telefone')");

    header('Location: formulario.php');
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
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Inscrição de Equipe</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomes" id="nomes" class="inputUser" required>
                    <label for="nomes" class="labelInput">Nomes</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="equipe" id="equipe" class="inputUser" required>
                    <label for="equipe" class="labelInput">Equipe</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modalidade" id="modalidade" class="inputUser" required>
                    <label for="modalidade" class="labelInput">Modalidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="serie" id="serie" class="inputUser" required>
                    <label for="serie" class="labelInput">Série</label>
                </div>
                <br></br>
                <section>
    <button type="submit" name="submit" value="Agendar">Enviar</button>
    <button type="submit" name="submit" value=""><a href="listar.php">Outras Equipes</a></button>
                </section>
            </fieldset>
        </form>
    </div>
    <div>
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Inscrição Individual</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="idade" id="idade" class="inputUser" required>
                    <label for="idade" class="labelInput">Idade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modalidade" id="modalidade" class="inputUser" required>
                    <label for="modalidade" class="labelInput">Modalidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="serie" id="serie" class="inputUser" required>
                    <label for="serie" class="labelInput">Série</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
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