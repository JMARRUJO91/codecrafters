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
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        </style>


    
    <div class="box">
        <form action="individual.php" method="POST">
            <fieldset>
                <legend><b>Inscrição Individual</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
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
    <input class="inputBox" type="submit" name="submit" value="Enviar">
    <a class="botaolistar" href="indi_lista.php">Competidores</a></button>
    <a class="botaolistar" href="confirma.php">Voltar</a></button>
</section>
            </fieldset>
        </form>
    </div>
</body>
</html>
