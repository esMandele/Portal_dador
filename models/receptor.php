<?php 
     require_once("C:/wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Receptor extends ConnectToDB{
        private $id;
        private $nome;
        private $idade;
        private $genero;
        private $endereco;
        private $contacto;

        public function getId(){return $this->id;}

        public function setId($idReceptor){$this->id = $idReceptor;}

        public function getNome(){return $this->nome;}

        public function setNome($nomeReceptor){$this->nome = $nomeReceptor;}

        public function getIdade(){return $this->idade;}

        public function setIdade($idadeReceptor){$this->idade = $idadeReceptor;}

        public function getGenero(){return $this->genero;}

        public function setGenero($generoReceptor){$this->genero = $generoReceptor;}


        public function getEndereco(){return $this->endereco;}

        public function setEndereco($enderecoReceptor){$this->endereco = $enderecoReceptor;}

        public function getContacto(){return $this->contacto;}

        public function setContacto($contactoReceptor){$this->contacto = $contactoReceptor;}
        

        

    }

?>