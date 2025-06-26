<?php
/**
 * Estabelece e retorna uma conexão com o banco de dados.
 * @return mysqli|null Retorna o objeto de conexão ou null em caso de falha.
 */
function get_db_connection() {
    $servername = "localhost";
    $username = "root";
    $password = "240220";
    $dbname = "questao8";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        
        die("Falha na conexão: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");

    return $conn;
}

/**
 * Busca todos os produtos no banco de dados.
 * @param mysqli $conn O objeto de conexão com o banco de dados.
 * @return array Uma lista de produtos.
 */
function get_all_products($conn) {
    $products = [];
    $sql = "SELECT ProdutoID, Nome, Preco FROM Produto";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $products = $result->fetch_all(MYSQLI_ASSOC);
    }
    
    $result->free(); 
    return $products;
}
?>