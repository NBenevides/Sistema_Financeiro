<?php
 $nome = $_POST['nome'];
 $desc = $_POST['desc'];
 $tipo = $_POST['categoria'];


 include 'conexao.php';

 $sql = "INSERT INTO tb_categoria VALUES (null, '$nome', $tipo, '$desc')";

 if ($conexao->query($sql)) {
    echo "<script> alert('Conexão realizada'); history.back(); </script>";
 }
 else {
    echo"Erro";
 }
?>

