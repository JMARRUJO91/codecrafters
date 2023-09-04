<?php
class ColetivoModel {
    private $pdo;

public function __construct($pdo) {
    $this->pdo = $pdo;
    }

public function criarColetivo($modalidade, $ano_olimpiada) {
    $sql = "INSERT INTO coletivo (modalidade, ano_olimpiada) VALUES (?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$modalidade, $ano_olimpiada]);
    }

public function listarColetivos() {
    $sql = "SELECT * FROM coletivo";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // Implementar métodos para atualizar e excluir coletivos

    public function atualizarColetivo($id_coletivo, $modalidade, $ano_olimpiada){
        $sql = "UPDATE coletivo SET modalidade = ?, ano_olimpiada = ? WHERE id_coletivo = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$modalidade, $ano_olimpiada, $id_coletivo]);
    }
    

    public function excluirColetivo($id_coletivo) {
        $sql = "DELETE FROM coletivo WHERE id_coletivo = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_coletivo]);
    }
}
?>