<?php 
    require_once("C://wamp64/www/portaldodador/dataBase/ConnectToDB.php");

    class Localizacao extends ConnectToDB{
        private $id;
        private $latitude;
        private $longitude;
        private $destino;

        public function getId(){return $this->id;}
        public function setId($idLocalizacao){$this->id = $idLocalizacao;}

        public function getLatitude(){return $this->latitude;}
        public function setLatitude($latitudeLocalizacao){$this->latitude = $latitudeLocalizacao;}

        public function getLongitude(){return $this->longitude;}
        public function setLongitude($longitudeLocalizacao){$this->longitude = $longitudeLocalizacao;}

        public function getDestino(){return $this->destino;}
        public function setDestino($destinoLocalizacao){$this->destino = $destinoLocalizacao;}
    }
?>