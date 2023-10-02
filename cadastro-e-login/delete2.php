<?php

    if(!empty($_GET['id_individual']))
    {
        include_once('config.php');

        $id_individual = $_GET['id_individual'];

        $sqlSelect = "SELECT *  FROM individual WHERE id_individual=$id_individual";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM individual WHERE id_individual=$id_individual";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: indi_lista.php');
   
?>