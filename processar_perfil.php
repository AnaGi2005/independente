<?php
session_start();
require 'modulo.php';

$pdo = Modulo::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


try {

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha_antiga = $_POST['senha_antiga'];
$nova_senha = $_POST['nova_senha'];

// Consulta SQL para atualizar os dados do usuário
$sql = "UPDATE cadastrar SET cadnom = :nome, cademail = :email, cadcpf = :cpf, cadsenha = :senha WHERE cademail = :atualEmail";

$prp = $pdo->prepare($sql);
$prp->bindParam(':nome', $nome);
$prp->bindParam(':email', $email);
$prp->bindParam(':cpf', $cpf);
$prp->bindParam(':senha', $nova_senha);
$prp->bindParam(':senha', $senha_antiga);
$prp->bindParam(':atualEmail', $_SESSION['email']);

$prp->execute();

// Atualize as informações na sessão
$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
$_SESSION['cpf'] = $cpf;

Modulo::desconectar();

// Redirecione o usuário de volta para a página de perfil
header('Location: http://localhost/lojasgeoana/view/loja.php');
} catch (Exception $e) {
echo 'Erro ao atualizar o perfil: ' . $e->getMessage();
}

