<?php 
    require_once("C:/wamp64/www/portaldodador/models/centro.php");

    class diagnosticoController extends Diagnostico{

        function inserirDiagnostico(Diagnostico $diagnostico){
            $querysql = "INSERT INTO diagnostico(descricaodiagnostico, resultadodiagnostico, datadiagnostico)
             VALUES (?, ?, ?)";
            $stmt = $this->dbConnect()->prepare($querysql);
            $descricao = $diagnostico->getDescricao();
            $resultado = $diagnostico->getResultado();
            $data = $diagnostico ->getData();
           
            $stmt->execute([$descricao,$descricao,$data ]);
        }
    }
?>