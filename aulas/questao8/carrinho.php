<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

if (isset($_POST['add_to_cart'])) {
    $produto_id = $_POST['produto_id'];
    $produto_nome = $_POST['produto_nome'];
    $produto_preco = $_POST['produto_preco'];

    if (isset($_SESSION['carrinho'][$produto_id])) {
        $_SESSION['carrinho'][$produto_id]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$produto_id] = array(
            'nome' => $produto_nome,
            'preco' => $produto_preco,
            'quantidade' => 1
        );
    }
}

if (isset($_POST['update_cart'])) {
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];

    if ($quantidade > 0) {
        $_SESSION['carrinho'][$produto_id]['quantidade'] = $quantidade;
    } else {
        unset($_SESSION['carrinho'][$produto_id]);
    }
}

if (isset($_POST['remove_from_cart'])) {
    $produto_id = $_POST['produto_id'];
    unset($_SESSION['carrinho'][$produto_id]);
}


if (isset($_POST['clear_cart'])) {
    $_SESSION['carrinho'] = array();
}

header('Location: index.php?cart=open');
exit();
?>