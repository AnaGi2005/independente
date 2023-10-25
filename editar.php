<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$cpf = $_GET['cpf'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>INDEPENDENTE</title>
</head>
<body>
    <?php require '../header.php'; ?>
    <?php require '../menutopo1.php'; ?>

    <div class="mt-3">
        <form action="../controle/processar_perfil.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" placeholder="Digite seu nome completo" id="nome" name="nome" value="<?php echo $nome; ?>" required>
        </div>
        <div class="mt-3">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" placeholder="Digite seu melhor email" name="email" id="email" value="<?php echo $email; ?>">
        </div>
        <div class="mt-3">   
            <label for="CPF">CPF</label>
            <input type="number" class="form-control" placeholder="Digite o seu CPF" name="cpf" id="cpf" value="<?php echo $cpf; ?>">
        </div>
        <div class="mt-3">  
            <label for="senha_antiga">Senha antiga</label>
            <input type="password" class="form-control" placeholder="Digite sua senha antiga" name="senha_antiga" id="senha_antiga">
        </div>
        <div class="mt-3">  
            <label for="nova_senha">Senha nova</label>
            <input type="password" class="form-control" placeholder="Digite sua nova senha" name="nova_senha" id="nova_senha">
        </div>
 
        <button type="submit" class="btn btn-success btn btn-outline-primary mt-3 float-right">
          REDEFINIR
        </button>
        
    
        <a href="../controle/confirmar_exclusao.php" class="btn btn-danger mt-3 float-right">EXCLUIR</a>
    </form>
</body>
</html>
