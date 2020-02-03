<?php
try {
    include_once("conexao.php");
    $nome= $_POST['nome'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $cpf =$_POST['cpf'];

    //inserção de dados no banco de dados
    $sql = "INSERT INTO cliente(nome, endereco, numero,bairro ,cidade,uf,cep,email,cpf) 
    VALUES ('$nome','$endereco','$numero','$bairro','$cidade',
    '$uf','$cep','$email','$cpf')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if ($stmt == 1) {
    header('Location:../Clientes.php');
} else {
    header('Location: ../Registro.php');
}

?>
