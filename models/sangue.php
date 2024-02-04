<?php 
    require_once("C://wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Sangue extends ConnectToDB{
        private $id;
        private $percentagem;
        private $quant;
        private $compatibilidade;
        private $tipo;
        private $antigeno;
        private $rh;

        public function getId(){return $this->id;}
        public function setId($idSangue){$this->id = $idSangue;}

        public function getPercentagem(){return $this->percentagem;}
        public function setPercentagem($percentagemSangue){$this->percentagem = $percentagemSangue;}

        public function getQuant(){return $this->quant;}
        public function setQuant($qauntSangue){$this->quant = $qauntSangue;}

        public function getCompatibilidade(){return $this->compatibilidade;}
        public function setCompstibilidade($compatibilidadeSangue){$this->compatibilidade = $compatibilidadeSangue;}

        public function gettipo(){return $this->tipo;}
        public function setTipo($tipoSangue){$this->tipo = $tipoSangue;}

        public function getAntigeno(){return $this->antigeno;}
        public function setAntigeno($antigenoSangue){$this->antigeno = $antigenoSangue;}

        public function getRh(){return $this->rh;}
        public function setRh($rhSangue){$this->rh = $rhSangue;}

            

    }
?>