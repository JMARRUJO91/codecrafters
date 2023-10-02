<?php
include_once('config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    // Usar declarações preparadas para evitar injeção SQL
    $sqlUpdate = "UPDATE id 
                  SET nome=?, senha=?
                  WHERE id=?";
    $stmt = $conexao->prepare($sqlUpdate);
    
    // Verificar se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        $stmt->bind_param("ssi", $nome, $senha, $id);
    
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

header('Location: indi_lista.php');
?>