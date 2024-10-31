<?php
// recebendo os dados da tela de login

$email = $_POST['email'];
$password = $_POST['senha'];

// link da conexao
include 'conexao.php';

// pegar os dados do banco

$sql = "SELECT * FROM tb_user WHERE email = '$email'";
$query = $conexao->query($sql);
$resultado = $query->fetch_assoc();

// print_r($resultado);


$email_banco = $resultado['email'];
$senha_banco = $resultado['senha'];


if ($email == null or $email == "" or $senha == null or $senha == ""){
    echo "<script>alert('Usuário ou senha não digitado(s)'); window.location.href = '../index.html';</script>";
}
else {
    if ($email == $email_banco && $senha == $senha_banco){
        header('location: ../tela_inicial.html');
    } else {
        echo "<script>alert('Usuário ou senha Inválida'); window.location.href = '../index.html';</script>";
    }
}


// if ($email == $email_banco && $password == $senha_banco) {
//     header('location: ../tela_inicial.html');
// }else {
//     echo "<script> alert('Usuário ou Senha Inválida'); history.back(); </script>";
// }

// $sql = "SELECT * FROM tb_user WHERE senha = '$password'";

// $query = $conexao->query($sql);

// $result

?>