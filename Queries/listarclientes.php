<?php
try {
    include_once('conexao.php');
    $stmt = $conn->prepare("SELECT * from cliente");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();  
}
?>