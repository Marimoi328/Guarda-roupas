<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roupas</title>
    <style>
        .janela {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 2px solid black;
            padding: 20px;
            background-color: #f0f0f0;
            text-align: center;
        }
        .imagem {
            max-width: 220px;
            display: block;
            cursor: pointer; /* Adicionando cursor pointer para indicar que é clicável */
        }
    </style>
</head>
<body>
    <div class="janela">
        <?php
        // Diretório onde as imagens estão armazenadas
        $diretorio = "uploads/estilo/pronto/";

        // Obtém a lista de arquivos na pasta "pronto"
        $arquivos = scandir($diretorio);

        // Variáveis para armazenar os nomes dos arquivos de imagem
        $imagemhead = "";
        $imagemTopo = "";
        $imagemBaixo = "";
        $imagemBaixou = "";

        // Verifica cada arquivo na pasta
        foreach ($arquivos as $arquivo) {

            if (strpos($arquivo, 'h') === 0) {
                $imagemhead = $arquivo;
            } 
          

            elseif (strpos($arquivo, 't') === 0) {
                $imagemTopo = $arquivo;
            } 
    

            elseif (strpos($arquivo, 'b') === 0) {
                $imagemBaixo = $arquivo;
            }



            elseif (strpos($arquivo, 's') === 0) {
                $imagemBaixou = $arquivo;
            }
        }

        // Exibe as imagens na janela
        if (!empty($imagemhead)) {
            echo "<img class='imagem' src='$diretorio$imagemhead' alt='$imagemhead' onclick=\"excluirImagem('$imagemhead')\">";
        } else {
            echo "<p>Nenhuma imagem disponível para a parte de baixo ou shoes.</p>";
        }
        if (!empty($imagemTopo)) {
            echo "<img class='imagem' src='$diretorio$imagemTopo' alt='$imagemTopo' onclick=\"excluirImagem('$imagemTopo')\">";
        } else {
            echo "<p>Nenhuma imagem disponível para a parte de cima.</p>";
        }

        if (!empty($imagemBaixo)) {
            echo "<img class='imagem' src='$diretorio$imagemBaixo' alt='$imagemBaixo' onclick=\"excluirImagem('$imagemBaixo')\">";
        } else {
            echo "<p>Nenhuma imagem disponível para a parte de baixo ou shoes.</p>";
        }
        if (!empty($imagemBaixou)) {
            echo "<img class='imagem' src='$diretorio$imagemBaixou' alt='$imagemBaixou' onclick=\"excluirImagem('$imagemBaixou')\">";
        } else {
            echo "<p>Nenhuma imagem disponível para a parte de baixo ou shoes.</p>";
        }
        ?>
    </div>
    
    <button onclick="window.location.href = 'index.php'">Voltar</button>

    <script>
        function excluirImagem(nomeImagem) {
            if (confirm("Tem certeza que deseja excluir a imagem " + nomeImagem + "?")) {
                // Enviar uma solicitação para um script PHP que exclui a imagem
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "excluir_imagem.php?imagem=" + nomeImagem, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert("Imagem excluída com sucesso!");
                            location.reload(); // Recarrega a página para atualizar a lista de imagens
                        } else {
                            alert("Erro ao excluir a imagem!");
                        }
                    }
                };
                xhr.send();
            }
        }
    </script>
</body>
</html>
