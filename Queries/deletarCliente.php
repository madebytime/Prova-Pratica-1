<?php

  if( isset($_GET['id']) ){ 
  $id = $_GET['id'];
  include_once('conexao.php');
  $stmt = $conn->prepare('DELETE FROM cliente WHERE id = :id');
  $stmt->bindParam(':id', $id,PDO::PARAM_INT); 
  $stmt->execute();
  echo $stmt->rowCount(); 
}else{
  echo $id;
}

?>