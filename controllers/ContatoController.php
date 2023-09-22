<?php
require_once 'models/ContatoModel.php';


class ContatoController {
    private $contatoModel;

    public function __construct($pdo) {
        $this->contatoModel = new ContatoModel($pdo);
    }

    public function criarContato($nome, $sugestao) {
        $this->contatoModel->criarContato($nome, $sugestao);
    }

    public function listarcontatos() {
        return $this->contatoModel->listarcontatos();
    }

    public function exibirListacontatos() {
        $contatos = $this->contatoModel->listarcontatos();
        include 'views/contatos/lista.php';
    }

    public function atualizarContato ($id_contato, $nome, $sugestao) {
        $this->contatoModel->atualizarContato($id_contato, $nome, $sugestao);
    }
    public function excluirContato ($id_contato) {
        $this->contatoModel->excluirContato($id_contato);
    }
}

    
?>