<?php
function carregarConfiguracoes() {
    static $carregado = false; 

    if (!$carregado) {
        
        global $host, $usuario, $senha;
        $host = "localhost";
        $usuario = "root";
        $senha = "123456";
        echo " Configurações carregadas!<br>";
        $carregado = true;
    } else {
        echo " Configurações já foram carregadas, ignorando duplicata.<br>";
    }
}

carregarConfiguracoes(); 
carregarConfiguracoes(); 
carregarConfiguracoes(); 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Conexão com Banco</title>
</head>
<body>
    <h1>Conexão com Banco de Dados</h1>
    <p><strong>Host:</strong> <?php echo $host; ?></p>
    <p><strong>Usuário:</strong> <?php echo $usuario; ?></p>
    <p><strong>Senha:</strong> <?php echo $senha; ?></p>
</body>
</html>
