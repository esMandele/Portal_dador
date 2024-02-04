<?php 
    require_once("C:/wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Diagnostico extends ConnectToDB{
        private $id;
        private $descricao;
        private $resultado;
        private $data;
        //private rastreio_id;

        public function getId(){return $this->id;}

        public function setId($idDiagnostico){$this->id = $idDiagnostico;}

        public function getDescricao(){return $this->descricao;}

        public function setNome($descricaoDiagnostico){$this->descricao = $descricaoDiagnostico;}

        public function getResultado(){return $this->resultado;}

        public function setResultado($resultadoDiagnostico){$this->resultado = $resultadoDiagnostico;}

        public function getData(){return $this->data;}

        public function setData($dataDiagnostico){$this->data = $dataDiagnostico;}
    }
?>