<?php
class ContatoModel {
    private $pdo;

public function __construct($pdo) {
    $this->pdo = $pdo;
    }

public function criarContato($nome, $sugestao) {
    $sql = "INSERT INTO contato (nome, sugestao) VALUES (?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome, $sugestao]);
    }

public function listarContatos() {
    $sql = "SELECT * FROM contato";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // Implementar métodos para atualizar e excluir contatos

    public function atualizarContato($id_contato, $nome, $sugestao){
        $sql = "UPDATE contato SET nome = ?, sugestao = ? WHERE id_contato = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $sugestao, $id_contato]);
    }
    

    public function excluirContato($id_contato) {
        $sql = "DELETE FROM contato WHERE id_contato = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_contato]);
    }
}
?>