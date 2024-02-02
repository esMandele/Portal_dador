<?php 
    require_once("C:/wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Doacao extends ConnectToDB{
        private $id;
        private $tipo;
        private $data;
        private $hora;
        private $descricao;
      

        public function getId(){return $this->id;}

        public function setId($idDoacao){$this->id = $idDoacao;}

        public function getTipo(){return $this->tipo;}

        public function setTipo($tipoDoacao){
            $this->tipo = $tipoDoacao;
        }
        
        public function getData(){return $this->data;}

        public function setData($dataDoacao){$this->data = $dataDoacao;}

        public function getHora(){return $this->hora;}

        public function setHora($horaDoacao){$this->hora = $horaDoacao;}

        public function getDescricao(){return $this->descricao;}
    
        public function setDescricao($descricaoDoacao){$this->descricao = $descricaoDoacao;}

    }

?>