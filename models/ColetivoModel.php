<?php
class ColetivoModel {
    private $pdo;

public function __construct($pdo) {
    $this->pdo = $pdo;
    }

public function criarColetivo($nomes, $equipe, $modalidade, $serie) {
    $sql = "INSERT INTO coletivo (nomes, equipe, modalidade, serie) VALUES (?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nomes, $equipe, $modalidade, $serie]);
    }

public function listarColetivos() {
    $sql = "SELECT * FROM coletivo";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    // Implementar métodos para atualizar e excluir coletivos

    public function atualizarColetivo($id_coletivo, $nomes, $equipe, $modalidade, $serie){
        $sql = "UPDATE coletivo SET nomes = ?, equipe = ?, modalidade = ?, serie = ? WHERE id_coletivo = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nomes, $equipe, $modalidade, $serie, $id_coletivo]);
    }
    

    public function excluirColetivo($id_coletivo) {
        $sql = "DELETE FROM coletivo WHERE id_coletivo = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_coletivo]);
    }
}
?>