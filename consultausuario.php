<?php
session_start();
require 'modulo.php';

$pdo = Modulo::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


try {
    // Consulta SQL para buscar o usuário
    $cademail = $_POST['email'];
    $cadsenha = $_POST['senha'];
    $sql = "SELECT * FROM cadastrar WHERE cademail = '$cademail' and cadsenha = '$cadsenha' ";

    $prp = $pdo->prepare($sql);
    $prp->execute();
    Modulo::desconectar();

    // Exibir os resultados
    $data = $prp->fetch(PDO::FETCH_ASSOC);
    if (isset($data['cadnom'])) {
        $_SESSION['nome'] = $data['cadnom'];
        $_SESSION['email'] = $data['cademail'];
        $_SESSION['cpf'] = $data['cadcpf'];
        header('Location: http://localhost/lojasgeoana/view/loja.php');
    } else {
        echo '<div class="row alert alert-danger"><h1>USUÁRIO NÃO ENCONTRADO, EFETUE O CADASTRO</h1></div>' ;
    }
} catch (Exception $e) {
    return;
}
