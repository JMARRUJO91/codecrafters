<?php
require_once 'models/AdmModel.php';


class AdmController {
    private $admModel;

    public function __construct($pdo) {
        $this->admModel = new AdmModel($pdo);
    }

    public function criarAdm($senha) {
        $this->admModel->criarAdm($senha);
    }

    public function listarAdms() {
        return $this->admModel->listarAdms();
    }

    public function exibirListaAdms() {
        $admes = $this->admModel->listarAdms();
        include 'views/adms/lista.php';
    }

    public function atualizarAdm ($id, $senha) {
        $this->admModel->atualizarAdm($id, $senha);
    }
    public function excluirAdm ($id) {
        $this->admModel->excluirAdm($id);
    }
}

    
?>