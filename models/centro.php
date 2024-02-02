<?php 
    require_once("C:/wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Centro extends ConnectToDB{
        private $id;
        private $nome;
        private $endereco;
        private $contacto;

        public function getId(){return $this->id;}

        public function setId($idCentro){$this->id = $idCentro;}

        public function getNome(){return $this->nome;}

        public function setNome($nomeCentro){$this->nome = $nomeCentro;}

        public function getEndereco(){return $this->endereco;}

        public function setEndereco($enderecoCentro){$this->endereco = $enderecoCentro;}

        public function getContacto(){return $this->contacto;}

        public function setContacto($contactoCentro){$this->contacto = $contactoCentro;}
        

        

    }

?>