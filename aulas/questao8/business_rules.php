<?php
function calcularTotalComDescontos($carrinho)
{
    $total_original = 0;
    $total_com_descontos = 0;
    $itens_com_desconto = 0;

    if (empty($carrinho)) {
        return array(
            'total_final' => 0,
            'total_original' => 0,
            'desconto_aplicado' => 0
        );
    }

    foreach ($carrinho as $produto) {
        $subtotal_item = $produto['quantidade'] * $produto['preco'];
        $total_original += $subtotal_item; 

        if ($produto['quantidade'] > 1 && $produto['preco'] > 50) {
            $subtotal_item *= 0.90; 
            $itens_com_desconto++;  
        }

        $total_com_descontos += $subtotal_item;
    }

    $total_final = $total_com_descontos;

    if ($itens_com_desconto >= 2) {
        $total_final *= 0.95; 
    }

    return array(
        'total_final' => $total_final,
        'total_original' => $total_original,
        'desconto_aplicado' => $total_original - $total_final
    );
}

?>