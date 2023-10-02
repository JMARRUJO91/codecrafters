<?php
include_once('config.php');

if (isset($_POST['update'])) {
        $id_coletivo = $_POST['id_coletivo'];
        $nomes = $_POST['nomes'];
        $equipe = $_POST['equipe'];
        $modalidade = $_POST['modalidade'];
        $serie = $_POST['serie'];

    // Usar declarações preparadas para evitar injeção SQL
    $sqlUpdate = "UPDATE coletivo
                  SET nomes=?, equipe=?, modalidade=?, serie=?
                  WHERE id_coletivo=?";
    $stmt = $conexao->prepare($sqlUpdate);
    
    // Verificar se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        $stmt->bind_param("ssssi", $nomes, $equipe, $modalidade, $serie, $id_coletivo);
    
        if ($stmt->execute()) {
            echo "Registro atualizado com sucesso.";
        } else {
            echo "Erro ao atualizar o registro: " . $stmt->error;
        }
        
        // Fechar a declaração preparada após o uso
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }
}

header('Location: sistema.php');
?>