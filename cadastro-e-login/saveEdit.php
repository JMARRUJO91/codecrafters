<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id_coletivo = $_POST['id_coletivo'];
        $nomes = $_POST['nomes'];
        $equipe = $_POST['equipe'];
        $modalidade = $_POST['modalidade'];
        $serie = $_POST['serie'];
        
        $sqlInsert = "UPDATE coletivo 
        SET nomes='$nomes',equipe='$equipe',modalidade='$modalidade',serie='$serie'
        WHERE id_coletivo=$id_coletivo";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>