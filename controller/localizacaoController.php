<?php 
    require_once("C://wamp64/www/portaldodador/models/localizacao.php");

    class localizacaoController extends Localizacao{
        function inserirLocalizacao(Localizacao $localizacao){
            $querysql = "INSERT INTO localizacao(latitudelocalizacao, longitudelocalizacao, destinolocalizacao) VALUES(?, ?, ?)";

            $stmt =$this->dbConnect()->prepare($querysql);
            $latitude = $localizacao->getLatitude();
            $longitude = $localizacao->getLongitude();
            $destino = $localizacao->getDestino();

            $stmt->execute([$latitude, $longitude, $destino]); 
        }
    }
?>