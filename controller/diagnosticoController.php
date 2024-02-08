<?php
class DiagnosticoController
{
    private $model;

    public function __construct(DiagnosticoModel $model)
    {
        $this->model = $model;
    }

    public function listarDiagnostico()
    {
        return $this->model->listarDiagnostico();
    }

    public function adicionarDiagnostico($descricao, $resultado, $data)
    {
        return $this->model->adicionarDiagnostico($descricao, $resultado, $data);
    }


    // Adicione outros métodos conforme necessário
}
