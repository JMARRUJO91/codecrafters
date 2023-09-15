<?php
require_once 'models/AdmModel.php';


class AdmController {
    private $admModel;

    public function __construct($pdo) {
        $this->admModel = new AdmModel($pdo);
    }

    public function criarAdm($nome, $email, $senha) {
        $this->admModel->criarAdm($nome, $email, $senha);
    }

    public function listarAdms() {
        return $this->admModel->listarAdms();
    }

    public function exibirListaAdms() {
        $admes = $this->admModel->listarAdms();
        include 'views/adms/lista.php';
    }

    public function atualizarAdm ($id, $nome, $email, $senha) {
        $this->admModel->atualizarAdm($id, $nome, $email, $senha);
    }
    public function excluirAdm ($id) {
        $this->admModel->excluirAdm($id);
    }
}

    
?>