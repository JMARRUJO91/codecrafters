<?php
require_once 'models/TreinadorModel.php';


class TreinadorController {
    private $treinadorModel;

    public function __construct($pdo) {
        $this->treinadorModel = new TreinadorModel($pdo);
    }

    public function criarTreinador($nome2, $idade2, $nacionalidade2) {
        $this->treinadorModel->criarTreinador($nome2, $idade2, $nacionalidade2);
    }

    public function listarTreinadores() {
        return $this->treinadorModel->listarTreinadores();
    }

    public function exibirListaTreinadores() {
        $treinadores = $this->treinadorModel->listarTreinadores();
        include 'views/treinadores/lista.php';
    }

    public function atualizarTreinador ($id_treinador, $nome2, $idade2, $nacionalidade2) {
        $this->treinadorModel->atualizarTreinador($id_treinador, $nome2, $idade2, $nacionalidade2);
    }
    public function excluirTreinador ($id_treinador) {
        $this->treinadorModel->excluirTreinador($id_treinador);
    }
}

    
?>