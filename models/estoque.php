<?php 
    require_once("C://wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Estoque extends ConnectToDB{
        private $id;
        private $data;
        private $quant;

        public function getId(){return $this->id;}

        public function setId($idEstoque){$this->id = $idEstoque;}

        public function getData(){return $this->data;}

        public function setData($dataEstoque){$this->data = $dataEstoque;}

        public function getQuant(){return $this->quant;}

        public function setQuant($quantEstoque){$this->quant = $quantEstoque;}


    }
?>
