<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Fotos</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="categoria">Selecione a categoria da roupa:</label>
        <select name="categoria" id="categoria">
            <option value="bermuda">Bermuda</option>
            <option value="calca">Calça</option>
            <option value="blusa">Blusa</option>
            <option value="head">Head</option>
            <option value="shoes">Shoes</option>
            <!-- Adicione mais opções conforme necessário -->
        </select>
        <input type="file" name="imagem" id="imagem">
        <br> <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <ul>
    <li><a href="roupas.php">Roupas</a></li>
        <li><a href="bermuda.php">Bermudas</a></li>
        <li><a href="calca.php">Calças</a></li>
        <li><a href="blusa.php">Blusas</a></li>
        <li><a href="shoes.php">Shoes</a></li>
        <li><a href="Head.php">Head</a></li>
        
        
    </ul>
</body>
</html>
