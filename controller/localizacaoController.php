<?php 
    class localizacaoController{
        private $model;
        public function __construct(localizacaoModel $model){
            $this->model=$model;
        }

        public function listarLocalizacao()
    {
        return $this->model->listarLocalizacao();
    }

    public function adicionarLocalizacao($latitude,$longitude, $destino)
    {
        return $this->model->adicionarLocalizacao($latitude, $longitude, $destino);
    }
    }
?>