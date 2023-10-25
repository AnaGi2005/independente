<?php
require "modulo.php";

$pdo = Modulo::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$validado = false;

if (!empty($_POST)) {
   //echo '<span class="alert alert-success">VOCÊ CLICOU NO BOTÃO OK!!!!</span>';
   $validado = true;
   $nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
   $assunto = strtoupper(filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_SPECIAL_CHARS));
   $email = strtolower(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
   $descricao = strtoupper(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS));
}

if($validado){
   $sql = "insert into contatos (connome,conemail,conassunto,conmensagem) values (?,?,?,?)";
   $prp = $pdo->prepare($sql);
   $prp->execute(array($nome,$email,$assunto,$descricao));
   Modulo::desconectar();
   echo '<div class="alert alert-success">Muito obrigado '.$nome.' pela sua mensagem. Aguarde o retorno da resposta no seu e-mail '.$email.'</div>';
}
