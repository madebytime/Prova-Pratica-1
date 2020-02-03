<?php
try {
    require('conexao.php');
   $id= $_GET['id'];
    $stmt = $conn->prepare('UPDATE cliente SET nome = :nome,
    endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade ,
    uf = :uf, cep = :cep, email = :email, 
    cpf= :cpf WHERE id = $id');
    $stmt->execute(array(
        ':nome' => $_POST['nome'],
        ':endereco' => $_POST['endereco'],
        ':numero' => $_POST['numero'],
        ':bairro' => $_POST['bairro'],
        ':cidade' => $_POST['cidade'],
        ':uf' => $_POST['uf'],
        ':cep' => $_POST['cep'],
        ':email' => $_POST['email'],
        ':cpf' => $_POST['cpf'],
    ));
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
