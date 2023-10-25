<title>CONSTRUQUER</title>
<?php
require '../header.php';
require '../menutopo1.php';
require "../controle/usuario.php";
?>
<form action="cadastro.php" method="post">
    <div class="mt-3">
        <label>Nome</label>
        <input type="text" class="form-control" placeholder="Digite seu nome completo" id="nome" name="nome">
    </div>
    <div class="mt-3">
        <label>CPF</label>
        <input type="text" class="form-control" placeholder="Digite seu CPF" name="cpf" id="cpf">
    </div>
    <div class="mt-3">
        <label>E-mail</label>
        <input type="text" class="form-control" placeholder="Digite seu melhor email" name="email" id="email">
    </div>
    <div class="mt-3">

        <label>Senha</label>
        <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" id="senha">
    </div>
    <button type="submit" class="btn btn-success btn btn-outline-primary mt-3 float-right">
        CADASTRAR
    </button>
</form>