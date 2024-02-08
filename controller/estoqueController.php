<?php 
    class EstoqueController{
        private $model;
        public function __construct(EstoqueModel $model){
            $this->model=$model;
        }

        public function listarEstoque()
    {
        return $this->model->listarEstoque();
    }

    public function adicionarEstoque($data, $quant )
    {
        return $this->model->adicionarEstoque($data, $quant);
    }
    }
?>