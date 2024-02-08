<?php
    require_once ('C:/wamp64/www/mvc/models/dadorModel.php');
    require_once ('C:/wamp64/www/mvc/controller/dadorController.php');
    require_once ('C:/wamp64/www/mvc/models/db.php');

    $model = new DadorModel($pdo);
    $controller = new DadorController($model);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['save'])) {
            $nome = $_POST['nome'];
            $datanasc = $_POST['datanasc'];
            $peso = $_POST['peso'];
            $genero = $_POST['genero'];
            $historico = $_POST['historico'];
            $endereco =$_POST['endereco'];;
            $contacto=$_POST['contacto'];

            $newUserId = $controller->adicionarDador($nome, $datanasc, $peso, $genero, $historico, $endereco, $contacto);
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

    $dadores = $controller->listarDador();
    include_once ('C:/wamp64/www/mvc/view/dadorView.php');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD do dador</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionarUsuarioModal">
            Adicionar dador
        </button>
        <h2>Lista de dadores</h2>
        <!-- Tabela dos dadores -->
        <table id="tabela" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Peso</th>
                    <th>Genero</th>
                    <th>Historico</th>
                    <th>Endereco</th>
                    <th>Contacto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dadores as $dador) : ?>
                    <tr>
                        <td><?php echo $dador['iddador']; ?></td>
                        <td><?php echo $dador['nomedador']; ?></td>
                        <td><?php echo $dador['datanascdador']; ?></td>
                        <td><?php echo $dador['pesodador']; ?></td>
                        <td><?php echo $dador['generodador']; ?></td>
                        <td><?php echo $dador['historicodador']; ?></td>
                        <td><?php echo $dador['enderecodador']; ?></td>
                        <td><?php echo $dador['contactodador']; ?></td>
                        <td>
                            <!-- Botões para Editar e Excluir -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarDadorModal<?php echo $dador['iddador']; ?>">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirDadorModal<?php echo $dador['iddador']; ?>">
                                Excluir
                            </button>
                        </td>
                    </tr>

                    <!-- Modal para Editar dador -->
                    <div class="modal fade" id="editarUsuarioModal<?php echo $dador['iddador']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar dador</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulário para editar dador -->
                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                        <input type="hidden" name="updateId" value="<?php echo $dador['iddador']; ?>">
                                        <div class="form-group">
                                            <label for="updateNome">Nome:</label>
                                            <input type="text" class="form-control" id="updateNome" name="updateNome" value="<?php echo $dador['nomedador']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="updatePeso">Peso</label>
                    <!-- Modal para Excluir Usuário -->
                    <div class="modal fade" id="excluirUsuarioModal<?php echo $dador['iddador']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Excluir dador</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza de que deseja excluir o dador <?php echo $dador['nomedador']; ?>?</p>
                                    <!-- Formulário para confirmar exclusão -->
                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                        <input type="hidden" name="deleteId" value="<?php echo $dador['iddador']; ?>">
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

    <!-- Modal para Adicionar dador -->
    <div class="modal fade" id="adicionarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Dador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulário para adicionar dador -->
                    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="datanasc">Data de Nascimento:</label>
                            <input type="text" class="form-control" id="datanasc" name="datanasc" required>
                        </div>
                        <div class="form-group">
                            <label for="peso">
                                peso:</label>
                            <input type="text" class="form-control" name="peso" required>
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero:</label>
                            <input type="text" class="form-control" name="genero" required>
                        </div>
                        <div class="form-group">
                            <label for="historico">Historico:</label>
                            <input type="text" class="form-control" name="historico" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereco:</label>
                            <input type="text" class="form-control" name="endereco" required>
                        </div>
                        <div class="form-group">
                            <label for="Contacto">Contacto:</label>
                            <input type="text" class="form-control" name="contacto" required>
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