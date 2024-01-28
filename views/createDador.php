<?php
    require_once("C:/xampp/htdocs/portaldodador/models/Dador.php");
    require_once("C:/xampp/htdocs/portaldodador/controller/dadorController.php");
    
    
    $dador = new Dador();

    $dadorController = new dadorController();

    if(isset($_POST['btn-registrar'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];
        $genero = $_POST['genero'];
        $historico =$_POST['historico'];
        $endereco = $_POST['endereco'];
        $contacto = $_POST['contacto'];

        $dador->setNome($nome);
        $dador->setIdade($idade);
        $dador->setPeso($peso);
        $dador->setGenero($genero);
        $dador ->setHistorico($historico);
        $dador ->setEndereco($endereco);
        $dador ->setContacto($contacto);

        //Grvar na DB
        $dadorController->inserirDador($dador);

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
        Idade:<input type="text"  name="idade"><br>
        Peso:<input type="text"  name="peso"><br>
        Genero:<input type="text"  name="genero"><br>
        Historico: <input type="text" name="historico"><br>
        Endereco: <input type="text" name="endereco"><br>
        Contacto: <input type="text" name="contacto"><br>

        <button name="btn-registrar">Gravar</button>
    </form>
</body>
</html>