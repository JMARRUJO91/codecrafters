<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id_individual'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $modalidade = $_POST['modalidade'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $serie = $_POST['serie'];
        $telefone = $_POST['telefone'];

        
        $sqlInsert = "UPDATE individual 
        SET nome='$nome',idade='$idade',modalidade='modalidade',email='$email',cidade='$cidade',serie='$serie',telefone='$telefone'
        WHERE id_individual=$id_individual";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: indi_lista.php');

?>