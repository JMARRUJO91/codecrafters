<?php
class AdmModel {
    private $pdo;

public function __construct($pdo) {
    $this->pdo = $pdo;
    }

public function criarAdm($nome, $email, $senha) {
    $sql = "INSERT INTO adm (nome, email, senha) VALUES (?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha]);
    }

public function listaradms() {
    $sql = "SELECT * FROM adm";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // Implementar métodos para atualizar e excluir ADM

    public function atualizarAdm($id_adm, $nome, $email, $senha){
        $sql = "UPDATE coletivo SET nome = ?, email = ?, senha = ? WHERE id_adm = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $id_adm]);
    }
    

    public function excluirAdm($id_coletivo) {
        $sql = "DELETE FROM adm WHERE id_adm = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_adm]);
    }
}
?>