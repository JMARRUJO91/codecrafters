<?php
include_once('config.php');

if (isset($_POST['update'])) {
    $id_individual = $_POST['id_individual'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $modalidade = $_POST['modalidade'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $serie = $_POST['serie'];
    $telefone = $_POST['telefone'];

    // Usar declarações preparadas para evitar injeção SQL
    $sqlUpdate = "UPDATE individual 
                  SET nome=?, idade=?, modalidade=?, email=?, cidade=?, serie=?, telefone=?
                  WHERE id_individual=?";
    $stmt = $conexao->prepare($sqlUpdate);
    
    // Verificar se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        $stmt->bind_param("sssssssi", $nome, $idade, $modalidade, $email, $cidade, $serie, $telefone, $id_individual);
    
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