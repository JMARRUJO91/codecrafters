<?php
require_once 'models/ColetivoModel.php';


class ColetivoController {
    private $coletivoModel;

    public function __construct($pdo) {
        $this->coletivoModel = new ColetivoModel($pdo);
    }

    public function criarColetivo($nomes, $equipe, $modalidade, $serie) {
        $this->ColetivoModel->criarColetivo($nomes, $equipe, $modalidade, $serie);
    }

    public function listarColetivos() {
        return $this->coletivoModel->listarColetivos();
    }

    public function exibirListaColetivos() {
        $coletivos = $this->
        Model->listarColetivos();
        include 'views/coletivos/lista.php';
    }

    public function atualizarColetivo ($id_coletivo, $nomes, $equipe, $modalidade, $serie) {
        $this->coletivoModel->atualizarColetivo($id_coletivo, $nomes, $equipe, $modalidade, $serie);
    }
    public function excluirColetivo ($id_coletivo) {
        $this->coletivoModel->excluirColetivo($id_coletivo);
    }
}

    
?>