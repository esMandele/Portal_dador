<?php 
    require_once("C://wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Rastreio extends ConnectToDB{
        private $id;
        private $tipoexame;
        private $descricao;
        private $data;
        private $hora;
        
        public function getId(){return $this->id;}
        public function setId($idRastreio){$this->id = $idRastreio;}
        
        public function getTipoexame(){return $this->tipoexame;}
        public function setTipoexame($tipoexameRastreio){$this->tipoexame=$tipoexameRastreio;}

        public function getDescricao(){return $this->descricao;}
        public function setDescricao($descricaoRastreio){$this->descricao=$descricaoRastreio;}

        public function getData(){return $this->data;}
        public function setData($dataRastreio){$this->data=$dataRastreio;}

        public function getHora(){return $this->hora;}
        public function setHora($horaRastreio){$this->hora=$horaRastreio;}
    }
?>
