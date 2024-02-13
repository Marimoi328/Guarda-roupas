<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blusas</title>
    <style>
        .imagem-container {
            position: relative;
            display: inline-block;
            margin: 10px;
            max-width: 300px;
        }
        .imagem {
            max-width: 100%;
            height: auto;
            display: block;
        }
        .marcador {
            position: absolute;
            top: 0;
            right: 0;
            background-color: red;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <button onclick="window.location.href = 'index.php'">Voltar</button>

    <h1>Rostos</h1>

    <?php
    $diretorio = "uploads/estilo/head/";
    exibirImagens($diretorio);
    ?>

    <script>
        function duplicarImagem(nomeImagem) {
            // Enviar uma solicitação para um script PHP que duplica a imagem
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "duplicar4.php?imagem=" + nomeImagem, true);
            xhr.send();
            alert("Imagem duplicada com sucesso!");
        }
    </script>
</body>
</html>

<?php
function exibirImagens($diretorio) {
    if (is_dir($diretorio)) {
        if ($handle = opendir($diretorio)) {
            while (($file = readdir($handle)) !== false) {
                if ($file != "." && $file != "..") {
                    echo "<div class='imagem-container'>";
                    echo "<img class='imagem' src='$diretorio$file' alt='$file'>";
                    echo "<div class='marcador' onclick=\"duplicarImagem('$file')\">+</div>";
                    echo "</div>";
                }
            }
            closedir($handle);
        }
    }
}
?>
