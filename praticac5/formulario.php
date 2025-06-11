<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="processa_cadastro.php" method="POST" enctype="multipart/form-data">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Imagem de Perfil (JPG, JPEG, PNG, TIFF, GIF):</label><br>
        <input type="file" name="imagem" accept=".jpg,.jpeg,.png,.tiff,.gif" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
