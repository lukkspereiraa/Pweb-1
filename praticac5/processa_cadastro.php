<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
        $arquivoTmp = $_FILES['imagem']['tmp_name'];
        $nomeArquivo = basename($_FILES['imagem']['name']);
        $tipoMime = mime_content_type($arquivoTmp);

        $tiposPermitidos = ['image/jpeg', 'image/jpg', 'image/png', 'image/tiff', 'image/gif'];
        $infoImagem = getimagesize($arquivoTmp);

        if ($infoImagem && in_array($tipoMime, $tiposPermitidos)) {

    
            $pastaUploads = __DIR__ . '/uploads';
            if (!is_dir($pastaUploads)) {
                mkdir($pastaUploads, 0777, true);
            }

            $destino = $pastaUploads . '/' . $nomeArquivo;

            if (move_uploaded_file($arquivoTmp, $destino)) {
                $caminhoRelativo = 'uploads/' . $nomeArquivo;

                echo "Cadastro realizado com sucesso!<br>";
                echo "Nome: $nome<br>";
                echo "Email: $email<br>";
                echo "Imagem de perfil salva em: $caminhoRelativo<br>";
                echo "<img src='$caminhoRelativo' width='150'>";
            } else {
                echo "Erro ao mover o arquivo para o destino.";
            }
        } else {
            echo "O arquivo enviado não é uma imagem válida.";
        }
    } else {
        echo "Erro no upload da imagem.";
    }
} else {
    echo "Acesso inválido.";
}
?>
