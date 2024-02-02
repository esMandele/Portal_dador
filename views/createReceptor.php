<?php
    require_once("C:/wamp64/www/portaldodador/models/receptor.php");
    require_once("C:/wamp64/www/portaldodador/controller/receptorController.php");
    
    
    $receptor = new Receptor();

    $receptorController = new receptorController();

    if(isset($_POST['btn-registrar'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $genero = $_POST['genero'];
        $contacto = $_POST['contacto'];
        $endereco = $_POST['endereco'];

        $receptor->setNome($nome);
        $receptor->setIdade($idade);
        $receptor->setGenero($genero);
        $receptor->setContacto($contacto);
        $receptor->setEndereco($endereco);    

        //Grvar na DB
        $receptorController->inserirReceptor($receptor);

       // header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post">
        Nome:<input type="text" name="nome"><br>
        Idade: <input type="text"  name="idade"><br>
        Genero:<input type="text"  name="genero"><br>
        Contacto:<input type="text"  name="contacto"><br>
        Endereco: <input type="text" name="endereco"><br>

        <button name="btn-registrar">Gravar</button>
    </form>
</body>
</html>