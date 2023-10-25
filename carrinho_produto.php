<?php
session_start();

if (isset($_POST['proid'])) {
    $proid = $_POST['proid'];
    $pronome = $_POST['pronome'];
    $propreco = $_POST['propreco'];
    $profoto = $_POST['profoto'];
    $prodescricao = $_POST['prodescricao'];

    // Verifique se o carrinho de compras já existe na sessão; se não, crie um array vazio
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

    // Adicione o produto ao carrinho como um array associativo
    $_SESSION['carrinho'][] = array(
        'id' => $proid,
        'nome' => $pronome,
        'preco' => $propreco,
        'foto' => $profoto,
        'descricao' => $prodescricao
    );

    // Redirecione de volta para a página de produtos ou para a exibição do carrinho
    header('Location: http://localhost/lojasgeoana/view/loja.php');
}
?>
