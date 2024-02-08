<?php
require_once ('C:/wamp64/www/mvc/models/usuarioModel.php');
require_once ('C:/wamp64/www/mvc/controller/usuarioController.php');
require_once ('C:/wamp64/www/mvc/models/db.php');

$model = new UsuarioModel($pdo);
$controller = new UsuarioController($model);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['save'])) {
        $nome = $_POST['nome'];
        $perfil = $_POST['perfil'];
        $senha = $_POST['senha'];
        $hashSenha = password_hash($senha, PASSWORD_DEFAULT);
        $confirmar = $_POST['confirmaSenha'];

        $newUserId = $controller->adicionarUsuario($nome, $perfil, $hashSenha, $confirmar);
        header("Location: index.php");
    } elseif (isset($_POST['update'])) {
        $id = $_POST['updateId'];
        $nome = $_POST['updateNome'];
        $perfil = $_POST['updatePerfil'];

        $controller->atualizarUsuario($id, $nome, $perfil);
        header("Location: index.php");
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['deleteId'];
        $controller->excluirUsuario($id);
        header("Location: index.php");
    }
}

$usuarios = $controller->listarUsuarios();
include_once ("C:/wamp64/WWw/mvc/view/usuarioView.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuários</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionarUsuarioModal">
            Adicionar Usuário
        </button>
        <h2>Lista de Usuários</h2>
        <!-- Tabela de Usuários -->
        <table id="tabela" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario['idusuario']; ?></td>
                        <td><?php echo $usuario['nomeusuario']; ?></td>
                        <td><?php echo $usuario['perfilusuario']; ?></td>
                        <td>
                            <!-- Botões para Editar e Excluir -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarUsuarioModal<?php echo $usuario['idusuario']; ?>">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirUsuarioModal<?php echo $usuario['idusuario']; ?>">
                                Excluir
                            </button>
                        </td>
                    </tr>

                    <!-- Modal para Editar Usuário -->
                    <div class="modal fade" id="editarUsuarioModal<?php echo $usuario['idusuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulário para editar usuário -->
                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                        <input type="hidden" name="updateId" value="<?php echo $usuario['idusuario']; ?>">
                                        <div class="form-group">
                                            <label for="updateNome">Nome:</label>
                                            <input type="text" class="form-control" id="updateNome" name="updateNome" value="<?php echo $usuario['nomeusuario']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="updatePerfil">Perfil:</label>
                                            <input type="text" class="form-control" id="updatePerfil" name="updatePerfil" value="<?php echo $usuario['perfilusuario']; ?>" required>
                                        </div>
                                        <button type="submit" name="update" class="btn btn-primary">Salvar Alterações</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal para Excluir Usuário -->
                    <div class="modal fade" id="excluirUsuarioModal<?php echo $usuario['idusuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza de que deseja excluir o usuário <?php echo $usuario['nomeusuario']; ?>?</p>
                                    <!-- Formulário para confirmar exclusão -->
                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                        <input type="hidden" name="deleteId" value="<?php echo $usuario['idusuario']; ?>">
                                        <button type="submit" name="delete" class="btn btn-danger">Confirmar Exclusão</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>

    <!-- Modal para Adicionar Usuário -->
    <div class="modal fade" id="adicionarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulário para adicionar usuário -->
                    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="perfil">Perfil:</label>
                            <input type="text" class="form-control" id="perfil" name="perfil" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmaSenha">Confirmar Senha:</label>
                            <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" required>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabela').DataTable();
        });
    </script>

</body>

</html>