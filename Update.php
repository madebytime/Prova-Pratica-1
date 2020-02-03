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
                        <a class="d-flex align-items-center text-muted" href="">

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
                <h2>Cadastro</h2>
                <?php include('./Queries/listarclientes')?>
                <form class="form-control" method='POST' action='./Queries/updateClientes.php'>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name='nome'
                                value="<?php echo $dados['nome'] ?>" required>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control " id="endereco" name='endereco'
                                value="<?php echo $dados['endereco'] ?>" placeholder="Rua dos Devs" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control " id="numero" name='numero'
                                value="<?php echo $dados['numero'] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label for="uf">UF</label>
                            <input type="text" class="form-control" id="uf" name='uf' value="<?php echo $dados['uf'] ?>"
                                required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name='cidade'
                                value="<?php echo $dados['cidade'] ?>" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control " id="bairro" name='bairro'
                                value="<?php echo $dados['bairro'] ?>" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" name='cep'
                                value="<?php echo $dados['cep'] ?>" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="email" name='email'
                                value="<?php echo $dados['email'] ?>" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name='cpf'
                                value="<?php echo $dados['cpf'] ?>" required>
                        </div>

                    </div>



                    <button type="submit" class="btn btn-dark">Editar</button>
                </form>

            </main>
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
    $(document).ready(function() {
        $("#cpf").mask("999.999.999-99");
    });
    $(document).ready(function() {

        $("#cep").mask("99999-999", {
            completed: function() {
                var cep = $(this).val().replace(/[^0-9]/, "");

                if (cep.length != 8) {
                    return false;
                }

                var url = "https://viacep.com.br/ws/" + cep + "/json/";

                $.getJSON(url, function(dadosRetorno) {
                    try {
                        $("#endereco").val(dadosRetorno.logradouro);
                        $("#bairro").val(dadosRetorno.bairro);
                        $("#cidade").val(dadosRetorno.localidade);
                        $("#uf").val(dadosRetorno.uf);
                        $("#nr_end").focus();
                    } catch (ex) {
                        alert('CEP não existe')
                    }
                });
            }
        });

    });
    </script>
</body>

</html>