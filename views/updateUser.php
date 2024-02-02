<?php

    require_once("C:/wamp64/www/portaldodador/controllers/usuarioController/usuarioController.php");
    

    $userController = new usuarioController();

    if(isset($_POST['btn-Atualizar'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];


        //Atualizar usuario
        $userController->atualizarUsuario($id, $nome, $senha);

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
        <label>Id Usuario</label>
        <input type="text" name="id">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Senha</label>
        <input type="password"  name="senha">


        <button name="btn-Atualizar">Gravar</button>
    </form>
</body>
</html>