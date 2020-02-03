<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" ccontent="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Styles/Dashboard.css">
    <title>H4money</title>
    <style>
    .flex {
        padding: 25px;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid flex">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">H4money</a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="Dashboard.php">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Registros</span>
                        <a class="d-flex align-items-center text-muted" href="#">

                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="Clientes.php">
                                <span data-feather="users"></span>
                                Clientes
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <h2>Clientes</h2>
                <a class="btn btn-dark" type="button" href="Registro.php">Cadastrar<a>
                        <div class="table-responsive">
                            <div style="padding: 10px;">
                            </div>
                            <table id="table" class="table table-striped table-sm">
                                <?php include("./Queries/listarclientes.php")?>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Endereço</th>
                                        <th>Número</th>
                                        <th>Bairro</th>
                                        <th>Cidade</th>
                                        <th>UF</th>
                                        <th>CEP</th>
                                        <th>E-mail</th>
                                        <th>CPF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dados as $value) { ?>
                                    <tr>
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['nome'] ?></td>
                                        <td><?php echo $value['endereco'] ?></td>
                                        <td><?php echo $value['numero'] ?></td>
                                        <td><?php echo $value['bairro'] ?></td>
                                        <td><?php echo $value['cidade'] ?></td>
                                        <td><?php echo $value['uf'] ?></td>
                                        <td><?php echo $value['cep'] ?></td>
                                        <td><?php echo $value['email'] ?></td>
                                        <td><?php echo $value['cpf'] ?></td>
                                        <td><button type='button' class='btn btn-primary btn-sm' onclick="abrirusuario(<?php echo $value['id'] ?>)">Editar</button>
                                        <td ><a href='./Queries/deletarCliente.php?id=<?php echo $value["id"];?>'class='btn btn-danger btn-sm'>Delete</a></td>
                                                </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
            </main>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Cliente</h4>
                        </div>
                        <div class="modal-body form-group">

                        </div>

                    </div>
                </div>
            </div>







    <script src="https://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"
        type="text/javascript"></script>
    <script src="jquery.tabledit.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>

    <script src="dashboard.js"></script>
    <script>
        function abrirusuario(id_usuario) {
            $.ajax({
                type: "POST",
                url: "./Modal/updateCliente.php",
                data: {
                    id: id_usuario
                },
                success: function(result) {
                    $('.modal-body').html(result);
                    $('.bs-example-modal-lg').modal('show');
                }
            });
        }
    </script>
</body>

</html>