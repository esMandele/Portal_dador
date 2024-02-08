<?php 
    class RastreioController{
        private $model;
        public function __construct(RastreioModel $model){
            $this->model=$model;
        }

        public function listarRastreio()
    {
        return $this->model->listarRastreio();
    }

    public function adicionarRastreio($tipo,$descricao, $data, $hora)
    {
        return $this->model->adicionarRastreio($tipo, $descricao, $data, $hora);
    }
    }
?>