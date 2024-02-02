<?php 
    require_once("C:/wamp64/www/portaldodador/dataBase/ConnectToDB.php");
    class Dador extends ConnectToDB{
        private $id;
        private $nome;
        private $idade;
        private $peso;
        private $genero;
        private $historico;
        private $endereco;
        private $contacto;

        public function getId(){return $this->id;}

        public function setId($idDador){$this->id = $idDador;}

        public function getNome(){return $this->nome;}

        public function setNome($nomeDador){$this->nome = $nomeDador;}

        public function getIdadde(){return $this->idade;}

        public function setIdade($idadeDador){$this->idade = $idadeDador;}

        public function getPeso(){return $this->peso;}

        public function setPeso($pesoDador){$this->peso= $pesoDador;}

        public function getGenero(){return $this->genero;}

        public function setGenero($generoDador){$this->genero = $generoDador;}

        public function getHistorico(){return $this->historico;}

        public function setHistorico($historicoDador){$this->historico = $historicoDador;}

        public function getEndereco(){return $this->endereco;}

        public function setEndereco($enderecoDador){$this->endereco = $enderecoDador;}

        public function getContacto(){return $this->contacto;}

        public function setContacto($contactoDador){$this->contacto = $contactoDador;}
        

        

    }

?>