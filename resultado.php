<?php
require 'modulo.php';

// Verifique se o termo de pesquisa foi enviado via GET
if (isset($_GET['search_input'])) {
    // Use urldecode para decodificar a string e tratar espaços
    $search_input = urldecode($_GET['search_input']);

    // Consulta SQL para pesquisar produtos por nome
    $sql = "SELECT * FROM produtos WHERE pronome LIKE '%$search_input%'";

    // Execute a consulta
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Resultados da pesquisa:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "Nome do Produto: " . $row["nome"] . "<br>";
            // Adicione mais campos conforme necessário
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
} else {
    echo "Nenhum termo de pesquisa foi especificado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
