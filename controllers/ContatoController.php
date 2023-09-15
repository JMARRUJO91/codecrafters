<?php
require_once 'models/Model.php';


class ContatoController {
    private $contatoModel;

    public function __construct($pdo) {
        $this->contatoModel = new ContatoModel($pdo);
    }

    public function criarContato($nome, $email, $idade, $telefone) {
        $this->contatoModel->criarContato($nome, $email, $idade, $telefone);
    }

    public function listarcontatos() {
        return $this->contatoModel->listarcontatos();
    }

    public function exibirListacontatos() {
        $contatos = $this->contatoModel->listarcontatos();
        include 'views/contatos/lista.php';
    }

    public function atualizarContato ($id_contato, $nome, $email, $idade, $telefone) {
        $this->contatoModel->atualizarContato($id_contato, $nome, $email, $idade, $telefone);
    }
    public function excluirContato ($id_contato) {
        $this->contatoModel->excluirContato($id_contato);
    }
}

    
?>