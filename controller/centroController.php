<?php
class CentroController
{
    private $model;

    public function __construct(CentroModel $model)
    {
        $this->model = $model;
    }

    public function listarCentro()
    {
        return $this->model->listarCentro();
    }

    public function adicionarCentro($nome, $sector, $endereco, $contacto)
    {
        return $this->model->adicionarCentro($nome, $sector, $endereco, $contacto);
    }


    // Adicione outros métodos conforme necessário
}