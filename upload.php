<?php

// Verifica se o formulário foi submetido
if (isset($_POST['submit'])) {
    // Verifica se um arquivo foi selecionado
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $categoria = $_POST['categoria'];

        // Pasta onde o arquivo será armazenado
        $diretorio_destino = 'uploads/estilo/' . $categoria . '/';

        // Verifica se o diretório de destino existe, senão cria
        if (!is_dir($diretorio_destino)) {
            mkdir($diretorio_destino, 0777, true);
        }

        // Obtém o nome do arquivo e move para o diretório de destino
        $nome_arquivo = basename($_FILES['imagem']['name']);
        $caminho_arquivo = $diretorio_destino . $nome_arquivo;

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_arquivo)) {
            echo "O arquivo $nome_arquivo foi enviado com sucesso.";
            
            // Redireciona para index.php após 2 segundos
            header("refresh:2;url=index.php");
        } else {
            echo "Ocorreu um erro ao enviar o arquivo.";
        }
    } else {
        echo "Por favor, selecione um arquivo para enviar.";
    }
}

?>
