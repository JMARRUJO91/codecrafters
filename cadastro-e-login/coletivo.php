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
        $stmt = $pdo->prepare('SELECT COUNT(*) 

FROM coletivo WHERE equipe = ?');
$stmt->execute([$email, $telefone]);
$count = $stmt->fetchColumn();

if($count > 0) {
    $error ='Já existe uma equipe com este nome.';
}else{
    $stmt = $pdo->prepare('INSERT INTO coletivo
    (nomes, equipe, modalidade, serie)
    VALUES(:nomes, :equipe, :modalidade, :serie)');
    $stmt->execute(['nomes' => $nomes, 'equipe' => $equipe,
    'modalidade' => $modalidade, 'serie'=> $serie]);

    if($stmt->rowCount()){
        echo'<span>Equipe criada com sucesso!</span>';
    }else{
        echo '<span>Erro ao criar equipe. Tente novamente mais tarde</span>';
    }
    
    }
    if(isset($error)){
        echo '<span>' . $error . '</span>';
    }
        }
        

        $result = mysqli_query($conexao, "INSERT INTO coletivo(nomes,equipe,modalidade,serie) 
        VALUES ('$nomes','$equipe','$modalidade','$serie')");

        header('Location: coletivo.php');
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
    <a href="confirma.php">Voltar</a>
    <div>
        <form action="coletivo.php" method="POST">
            <fieldset>
                <legend><b>Inscrição de Equipe</b></legend>
                <br>
                <div class="">
                    <input type="text" name="nomes" id="nomes" class="" required>
                    <label for="nomes" class="">Nomes</label>
                </div>
                <br>
                <div class="">
                    <input type="text" name="equipe" id="equipe" class="" required>
                    <label for="equipe" class="">Equipe</label>
                </div>
                <br><br>
                <div class="">
                    <input type="text" name="modalidade" id="modalidade" class="" required>
                    <label for="modalidade" class="">Modalidade</label>
                </div>
                <br><br>
                <div class="">
                    <input type="text" name="serie" id="serie" class="" required>
                    <label for="serie" class="">Série</label>
                </div>
                <br></br>
                <section>
    <button type="submit" name="submit" value="Agendar">Enviar</button>
    <button type="submit" name="submit" value=""><a href="../listar.php">Outras Equipes</a></button>
                </section>
            </fieldset>
        </form>
    </div>  
</body>
</html>