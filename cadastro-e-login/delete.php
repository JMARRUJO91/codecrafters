<?php

    if(!empty($_GET['id_coletivo']))
    {
        include_once('config.php');

        $id_coletivo = $_GET['id_coletivo'];

        $sqlSelect = "SELECT *  FROM coletivo WHERE id_coletivo=$id_coletivo";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM coletivo WHERE id_coletivo=$id_coletivo";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>