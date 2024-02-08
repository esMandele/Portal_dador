<?php
class DadorController
{
    private $model;

    public function __construct(DadorModel $model)
    {
        $this->model = $model;
    }

    public function listarDador()
    {
        return $this->model->listarDador();
    }

    public function adicionarDador($nome, $datanascdador, $peso, $genero, $historico, $endereco, $contacto)
    {
        return $this->model->adicionarDador($nome, $datanascdador, $peso, $genero, $historico, $endereco, $contacto);
    }


    // Adicione outros métodos conforme necessário
}
