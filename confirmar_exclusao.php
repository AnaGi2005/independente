<?php
session_start();
require 'modulo.php';

$pdo = Modulo::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['confirmar_exclusao']) && $_POST['confirmar_exclusao'] == 1) {
    try {
        $email = $_SESSION['email'];
        echo "Email a ser excluído: " . $email; // Adicione esta linha para depuração

        // Consulta SQL para excluir o perfil do usuário
        $sql = "DELETE FROM cadastrar WHERE cademail = :email";

        $prp = $pdo->prepare($sql);
        $prp->bindParam(':email', $email);
        $prp->execute();

        // Destrua a sessão para efetuar o logout
        session_destroy();

        Modulo::desconectar();

        // Redirecione o usuário para a página de login ou outra página desejada
        header('Location: http://localhost/lojasgeoana/view/login.php');
    } catch (Exception $e) {
        echo 'Erro ao excluir o perfil: ' . $e->getMessage();
    }
} else {
    echo '<div class="row alert alert-danger"><h1>Confirmação de Exclusão necessária.</h1></div>' ;
}
