<?php
    include_once('config.php');

    if(!empty($_GET['id_individual']))
    {
        $id_individual = $_GET['id_individual'];
        $sqlSelect = "SELECT * FROM individual WHERE id_individual=$id_individual";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $idade = $user_data['idade'];
                $modalidade = $user_data['modalidade'];
                $email = $user_data['email'];
                $cidade = $user_data['cidade'];
                $serie = $user_data['serie'];
                $telefone = $user_data['telefone'];
                
            }
         }
        else
        {
            header('Location: indi_lista.php');
        }
        
        
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
        <form action="saveEdit2.php" method="POST">
            <fieldset>
                <legend><b>Atualizar a Inscrição Individual</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser"<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="idade" id="idade" class="inputUser"<?php echo $idade;?> required>
                    <label for="idade" class="labelInput">Idade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modalidade" id="modalidade" class="inputUser"<?php echo $modalidade;?> required>
                    <label for="modalidade" class="labelInput">Modalidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser"<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser"<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="serie" id="serie" class="inputUser"<?php echo $serie;?> required>
                    <label for="serie" class="labelInput">Série</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser"<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br></br>
<section>
<input type="hidden" name="id_individual" value="<?php echo $id_individual;?>">
    <input type="submit" name="update" id="submit" value="Atualizar">
    <button type="submit" name="submit" value=""><a class="" href="indi_lista.php">Voltar</a></button>
</section>
            </fieldset>
        </form>
    </div>
</body>
</html>