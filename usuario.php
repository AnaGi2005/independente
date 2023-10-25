<?php
//require "modulo.php";

$pdo = Modulo::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$validado = false;

if (!empty($_POST)) {
   $validado = true;
   $nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
   $cpf = strtoupper(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS));
   $email = strtolower(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
   $senha = strtoupper(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS));
}

if($validado){
   $sql = "insert into cadastrar (cadnom,cadcpf,cademail,cadsenha) values (?,?,?,?)";
   $prp = $pdo->prepare($sql);
   $prp->execute(array($nome,$cpf,$email,$senha));
   Modulo::desconectar();
   echo '<div class="alert alert-success">Cadastrado com sucesso '.$nome.' </div>';
}
