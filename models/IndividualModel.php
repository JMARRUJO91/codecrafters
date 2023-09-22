<?php
class IndividualModel {
    private $pdo;

public function __construct($pdo) {
    $this->pdo = $pdo;
    }

public function criarIndividual($nome, $idade, $modalidade, $email, $cidade, $serie, $telefone) {
    $sql = "INSERT INTO individual (nome, idade, modalidade, email, cidade, serie, telefone) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome, $idade, $modalidade, $email, $cidade, $serie, $telefone]);
    }

public function listarIndividuais() {
    $sql = "SELECT * FROM individual";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // Implementar métodos para atualizar e excluir individual

    public function atualizarIndividual($id_individual, $nome, $idade, $modalidade, $email, $cidade, $serie, $telefone){
        $sql = "UPDATE individual SET nome = ?, idade = ?, modalidade = ?, email = ?, cidade = ?, serie = ?, telefone = ? WHERE id_individual = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $idade, $modalidade, $email, $cidade, $serie, $telefone, $id_individual]);
    }
    

    public function excluirindividual($id_individual) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_individual]); 
    }
}
?>