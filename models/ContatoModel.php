<?php
class ContatoModel {
    private $pdo;

public function __construct($pdo) {
    $this->pdo = $pdo;
    }

public function criarContato($nome, $email, $idade, $telefone) {
    $sql = "INSERT INTO contato (nome, email, idade, telefone) VALUES (?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome, $email, $idade, $telefone]);
    }

public function listarContatos() {
    $sql = "SELECT * FROM contato";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // Implementar métodos para atualizar e excluir contatos

    public function atualizarContato($id_contato, $nome, $email, $idade, $telefone){
        $sql = "UPDATE contato SET modalidade = ?, ano_olimpiada = ? WHERE id_contato = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $idade, $telefone, $id_contato]);
    }
    

    public function excluirContato($id_contato) {
        $sql = "DELETE FROM contato WHERE id_contato = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_contato]);
    }
}
?>