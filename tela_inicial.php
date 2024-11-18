<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>
</head>
<body>


    <?php
    include 'php/conexao.php';
    session_start();
    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
        $query = $conexao->query($sql);
        $resultado = $query->fetch_assoc();
        echo $resultado['nome'];
    }
    else{
        echo "<script> alert('Você não está logado!!!'); history.back(); </script>";
    }
    ?>

    <div class="container text-center" style="margin-top: 15vh; color: beige;">
        <form action="" method="post">
        <h1 style="text-transform: uppercase; font-size: 50px;">Bem vindo ao nosso sistema</h1>
        <br><br>
            <p style="font-size: 30px;">Escolha a opção desejada</p>
            <br><br><br>
            <a a class="btn btn-primary" href="index.html" role="button">voltar ao início</a>
            <a a class="btn btn-warning" href="categoria.html" role="button">cadastrar uma categoria</a>
            <a a class="btn btn-success" href="lancamento.html" role="button">realizar um lançamento</a>
        
        
        </form>    
    </div>

</body>
</html>