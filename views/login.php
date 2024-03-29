<?php 
    //Conexão
    require_once("C:/wamp64/www/portaldodador/dataBase/ConnectToDB.php");
    
    //Sesão
    session_start();
    if(isset($_POST['btn-entrar'])):
        $erros = array();
        $login = mysqli_escape_string($con, $_POST['login']);
        $senha = mysqli_escape_string($con, $_POST['senha']);

        //Verificar se os campos vieram vazios.
        if(empty($login) or empty($senha)):
            $erros[] = "<li>O campo login/senha precisa ser preenchido.</li>";
        else:
            $sql = "SELECT login FROM usuario WHERE login = '$login'";
            $resultado = mysqli_query($con, $sql);

            if(mysqli_num_rows($resultado) > 0):
                $senha = md5($senha);
                $sql ="SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($con, $sql);
                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($con); 
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('location:home.php');
                else:
                    $erros[] = "<li> Usuário e senha não encontrados</li>";
                endif;
            else:
                $erros[] = "<li>Usuário inexistente </li>";
            endif;
        endif;
         
    endif;    
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
        if(!empty($erros)):
            foreach ($erros as $erro):
                echo $erro;
            endforeach;
        endif;     
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Login <input type="text" name="login" ><br>
        Senha <input type="password" name="senha"><br>
        <button name="btn-entrar">Entrar</button>
    </form>
</body>
</html>