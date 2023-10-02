<?php

if (!empty($_GET['id_individual'])) {
    include_once('config.php');
    
    $id_individual = $_GET['id_individual'];

    // Use prepared statements para evitar injeção SQL
    $sqlSelect = "SELECT * FROM individual WHERE id_individual = ?";
    $stmtSelect = $conexao->prepare($sqlSelect);
    $stmtSelect->bind_param("i", $id_individual);
    $stmtSelect->execute();
    $resultSelect = $stmtSelect->get_result();

    if ($resultSelect->num_rows > 0) {
        // Utilize prepared statements para a exclusão
        $sqlDelete = "DELETE FROM individual WHERE id_individual = ?";
        $stmtDelete = $conexao->prepare($sqlDelete);
        $stmtDelete->bind_param("i", $id_individual);
        $stmtDelete->execute();
    }
}

header('Location: indi_lista.php');
?>