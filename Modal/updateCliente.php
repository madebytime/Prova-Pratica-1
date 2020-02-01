<?php include("../Queries/listarclientes.php"); ?>
<form method="POST" action="../Queries/updateClientes.php">
    <label for="ID">Código do Usuário:</label>
    <input type="text" readonly value="<?php echo $dados['id'] ?>" class="form-control" id="#" name="id">
    <label for="NomeCompleto">Nome Completo:</label>
    <input type="text" value="<?php echo $dados['nome'] ?>" class="form-control" id="#" name="nome">
    <label for="">CPF: </label>
    <input type="text" value="<?php echo $dados['endereco'] ?>" class="form-control" id="#" name="endereco">
    <label for="">RG </label>
    <input type="text" value="<?php echo $dados['numero'] ?>" class="form-control" id="#" name="numero">
    <label for="">Sexo</label>
    <input type="text" value="<?php echo $dados['bairro'] ?>" class="form-control" id="#" name="bairro">
    <label for="">CEP</label>
    <input type="text" value="<?php echo $dados['cidade'] ?>" class="form-control" id="#" name="cidade">
    <label for="">Endereço </label>
    <input type="text" value="<?php echo $dados['uf'] ?>" class="form-control" id="#" name="uf">
    <label for="">Complemento</label>
    <input type="text" value="<?php echo $dados['cep'] ?>" class="form-control" id="#" name="cep">
    <label for="">Número </label>
    <input type="text" value="<?php echo $dados['email'] ?>" class="form-control" id="#" name="email">
    <label for="">Telefone</label>
    <input type="text" value="<?php echo $dados['cpf'] ?>" class="form-control" id="#" name="cpf">
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
        <input type="submit" value="Editar" class="btn btn-primary">
    </div>
</form>