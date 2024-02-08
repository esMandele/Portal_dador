<?php 
    class DoacaoController{
        private $model;
        public function __construct(DoacaoModel $model){
            $this->model=$model;
        }

        public function listarDoacao()
    {
        return $this->model->listarDoacao();
    }

    public function adicionarDoacao($tipo,$hora, $data, $descricao, )
    {
        return $this->model->adicionarDoacao($tipo, $data, $hora, $descricao);
    }
    }
?>