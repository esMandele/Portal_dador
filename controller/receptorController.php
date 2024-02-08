<?php
class ReceptorController
{
    private $model;

    public function __construct(ReceptorModel $model)
    {
        $this->model = $model;
    }

    public function listarReceptor()
    {
        return $this->model->listarReceptor();
    }

    public function adicionarReceptor($nome, $datanasc, $genero, $endereco, $contacto)
    {
        return $this->model->adicionarReceptor($nome, $datanasc, $genero, $endereco, $contacto);
    }

    /*public function atualizarReceptor($id, $nome)
    {
        return $this->model->atualizarUsuario($id, $nome);
    }

    public function excluirUsuario($id)
    {
        return $this->model->excluirUsuario($id);
    }*/

    // Adicione outros métodos conforme necessário
}
