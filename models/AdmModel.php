<?php
class AdmModel {
    private $pdo;

public function __construct($pdo) {
    $this->pdo = $pdo;
    }

public function criarAdm($nome, $senha) {
    $sql = "INSERT INTO adm (nome, senha) VALUES (?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome, $senha]);
    }

public function listaradms() {
    $sql = "SELECT * FROM adm";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // Implementar métodos para atualizar e excluir ADM

    public function atualizarAdm($id, $nome, $senha){
        $sql = "UPDATE coletivo SET nome = ?, email = ?, senha = ? WHERE id= ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $senha, $id]);
    }
    

    public function excluirAdm($id) {
        $sql = "DELETE FROM adm WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
?>