<?php
require_once 'models/IndividualModel.php';


class IndividualController {
    private $individualModel;

    public function __construct($pdo) {
        $this->individualModel = new IndividualModel($pdo);
    }

    public function criarIndividual($nome, $idade, $modalidade, $email, $cidade, $serie, $telefone) {
        $this->individualModel->criarIndividual($nome, $idade, $modalidade, $email, $cidade, $serie, $telefone);
    }

    public function listarIndividuais() {
        return $this->individualModel->listarIndividuais();
    }

    public function exibirListaIndividuais() {
        $individuais = $this->individualModel->listarIndividuais();
        include 'views/individuais/lista.php';
    }

    public function atualizarIndividual ($id_individual, $nome, $idade, $modalidade, $email, $cidade, $serie, $telefone) {
        $this->individualModel->atualizarIndividual($id_individual, $nome, $idade, $modalidade, $email, $cidade, $serie, $telefone);
    }
    public function excluirIndividual ($id_individual) {
        $this->individualModel->excluirIndividual($id_individual);
    }
}

    
?>