
<?php
require '../header.php';
require '../menutopo1.php';
?>

<?php
session_start();

if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
    echo '<h1>Seu Carrinho de Compras</h1>';
    echo '<table>';
    echo '<tr><th>Nome do Produto</th><th>Preço</th><th>Descrição</th><th>Ação</th></tr>';
    foreach ($_SESSION['carrinho'] as $produto) {
        echo '<tr>';
        echo '<td>' . $produto['nome'] . '</td>';
        echo '<td>R$' . $produto['preco'] . '</td>';
        echo '<td>' . $produto['descricao'] . '</td>';
        echo '<td><a href="remover_do_carrinho.php?id=' . $produto['id'] . '">Remover</a></td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<h1>Seu carrinho de compras está vazio</h1>';
}
?>
