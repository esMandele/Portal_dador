<?php
    require_once("C:/xampp/htdocs/portaldodador/models/Usuario.php");
    require_once("C:/xampp/htdocs/portaldodador/controller/usuarioController.php");
    
    
    $user = new Usuario();

    $userController = new usuarioController();

    if(isset($_POST['btn-registrar'])){
        $nome = $_POST['nome'];
        $perfil = $_POST['perfil'];
        $senha = $_POST['senha'];
        $senhaConfirmar = $_POST['senha2'];

        $user->setNome($nome);
        $user->setPerfil($perfil);
        $user->setSenha($senha);
        $user->setConfirmarSenha($senhaConfirmar);

        //Grvar na DB
        $userController->inserirUsuario($user);

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
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Perfil</label>
        <input type="text"  name="perfil">
        <label>Senha</label>
        <input type="password"  name="senha">
        <label>Confirmar Senha</label>
        <input type="password"  name="senha2">

        <button name="btn-registrar">Gravar</button>
    </form>
</body>
</html>