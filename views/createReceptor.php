<?php
    require_once ('C://wamp64/www/portaldodador/models/ReceptorModel.php');
    require_once ('C://wamp64/www/portaldodador/controller/ReceptorController.php');
    require_once ('C://wamp64/www/portaldodador/dataBase/ConnectToDB.php');

    $model = new ReceptorModel($pdo);
    $controller = new ReceptorController($model);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['save'])) {
            $nome = $_POST['nome'];
            $datanasc = $_POST['datanasc'];
            $genero = $_POST['genero'];
            $endereco = $_POST['endereco'];
            $contacto = $_POST['contacto'];

            $newUserId = $controller->adicionarReceptor($nome, $datanasc, $genero, $endereco, $contacto);
            header("Location: index.php");
        } /*elseif (isset($_POST['update'])) {
            $id = $_POST['updateId'];
            $nome = $_POST['updateNome'];
            $perfil = $_POST['updatePerfil'];

            $controller->atualizarUsuario($id, $nome, $perfil);
            header("Location: index.php");
        } elseif (isset($_POST['delete'])) {
            $id = $_POST['deleteId'];
            $controller->excluirUsuario($id);
            header("Location: index.php");
        }*/
    }

    $dadores = $controller->listarReceptor();
    include_once ('C://Wamp64/portaldodador/views/createReceptor.php');
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
        Data de Nascimento: <input type="text"  name="datanasc"><br>
        Genero:<input type="text"  name="genero"><br>
        Contacto:<input type="text"  name="contacto"><br>
        Endereco: <input type="text" name="endereco"><br>

        <button name="btn-registrar">Gravar</button>
    </form>
</body>
</html>