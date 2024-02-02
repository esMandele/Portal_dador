<?php
    require_once("C:/wamp64/www/portaldodador/models/centro.php");
    require_once("C:/wamp64/www/portaldodador/controller/centroController.php");
    
    
    $centro = new Centro();

    $centroController = new centroController();

    if(isset($_POST['btn-registrar'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $contacto = $_POST['contacto'];

        $centro->setNome($nome);
        $centro->setEndereco($endereco);
        $centro ->setContacto($contacto);

        //Grvar na DB
        $centroController->inserirCentro($centro);

        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post">
        
        Nome:<input type="text" name="nome"> <br>
        Endereco: <input type="text" name="endereco"><br>
        Contacto: <input type="text" name="contacto"><br>

        <button name="btn-registrar">Gravar</button>
    </form>
</body>
</html>