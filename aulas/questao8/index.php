<?php
session_start();

require_once 'database.php';
require_once 'business_rules.php';
require_once 'funcoes.php'; 

$templates_path = __DIR__ . '/templates/';

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}
$carrinho_session = $_SESSION['carrinho'];

$dados_carrinho = calcularTotalComDescontos($carrinho_session);

$conn = get_db_connection();
$produtos = get_all_products($conn);
$conn->close();

//  RENDERIZA A PÁGINA USANDO OS TEMPLATES
render_template($templates_path . 'header.phtml', ['numero_itens' => count($carrinho_session)]);
render_template($templates_path . 'product_table.phtml', ['products' => $produtos]);
render_template($templates_path . 'cart_sidebar.phtml', [
    'cart_data' => $dados_carrinho,
    'cart_session' => $carrinho_session
]);
render_template($templates_path . 'footer.phtml');

?>