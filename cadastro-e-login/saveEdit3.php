<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE adm 
        SET nome='$nome',senha='$senha'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: adm_lista.php');

?>