<?php
    require_once ('C:/wamp64/www/mvc/models/centroModel.php');
    require_once ('C:/wamp64/www/mvc/controller/centroController.php');
    require_once ('C:/wamp64/www/mvc/models/db.php');

    $model = new CentroModel($pdo);
    $controller = new CentroController($model);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['save'])) {
            $nome = $_POST['nome'];
            $sector = $_POST['sector'];
            $endereco = $_POST['endereco'];
            $contacto = $_POST['contacto'];

            $newUserId = $controller->adicionarCentro($nome, $sector, $endereco, $contacto);
            header("Location: index.php");
        } /*elseif (isset($_POST['update'])) {
            $id = $_POST['updateId'];
            $nome = $_POST['updateNome'];
            $contacto = $_POST['updateContacto'];

            $controller->atualizarUsuario($id, $nome, $perfil);
            header("Location: index.php");
        } elseif (isset($_POST['delete'])) {
            $id = $_POST['deleteId'];
            $controller->excluirUsuario($id);
            header("Location: index.php");
        }*/
    }

    $centros = $controller->listarCentro();
    include_once ("C:/wamp64/www/mvc/view/centroView.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de centro</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionarUsuarioModal">
            Adicionar centro
        </button>
        <h2>Lista de Usuários</h2>
        <!-- Tabela de Usuários -->
        <table id="tabela" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome de Centro</th>
                    <th>Sector de Centro</th>
                    <th>Endereco</th>
                    <th>Contacto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($centros as $centro) : ?>
                    <tr>
                        <td><?php echo $centro['idcentro']; ?></td>
                        <td><?php echo $centro['nomecentro']; ?></td>
                        <td><?php echo $centro['sectorcentro']; ?></td>
                        <td><?php echo $centro['enderecocentro']; ?></td>
                        <td><?php echo $centro['contactocentro']; ?></td>
                        <td>
                            <!-- Botões para Editar e Excluir -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarUsuarioModal<?php echo $centro['idcentro']; ?>">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirUsuarioModal<?php echo $centro['idcentro']; ?>">
                                Excluir
                            </button>
                        </td>
                    </tr>

                    <!-- Modal para Editar Usuário -->
                    <div class="modal fade" id="editarUsuarioModal<?php echo $centro['idcentro']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Centro</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulário para editar usuário -->
                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                        <input type="hidden" name="updateId" value="<?php echo $centro['idcentro']; ?>">
                                        <div class="form-group">
                                            <label for="updateNome">Nome do Centro:</label>
                                            <input type="text" class="form-control" id="updateNome" name="updateNome" value="<?php echo $centro['nomecentro']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            Sector: <input type="text" class="form-control" id="updatesector" name="updatesector" value="<?php echo $centro['sectorcentro']; ?>" required>
                                        </div>
                                        <button type="submit" name="update" class="btn btn-primary">Salvar Alterações</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal para Excluir Usuário -->
                    <div class="modal fade" id="excluirUsuarioModal<?php echo $centro['idcentro']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Excluir centro</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza de que deseja excluir o usuário <?php echo $centro['nomecentro']; ?>?</p>
                                    <!-- Formulário para confirmar exclusão -->
                                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                        <input type="hidden" name="deleteId" value="<?php echo $centro['idcentro']; ?>">
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
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar centro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulário para adicionar usuário -->
                    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                        <div class="form-group">
                            Nome do Centro:<input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            Sector do centro:<input type="text" class="form-control" id="sector" name="sector" required>
                        </div>
                        <div class="form-group">
                            Endereco:<input type="text" class="form-control" id="endereco" name="endereco" required>
                        </div>
                        <div class="form-group">
                            Contacto:<input type="text" class="form-control" id="contacto" name="contacto" required>
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