<?php
// Verifica se o parâmetro 'imagem' foi enviado através da URL
if (isset($_GET['imagem'])) {
    // Diretório onde as imagens estão armazenadas
    $diretorio = "uploads/estilo/pronto/";

    // Obtém o nome da imagem a ser excluída a partir dos parâmetros da URL
    $nomeImagem = $_GET['imagem'];

    // Caminho completo para a imagem
    $caminhoImagem = $diretorio . $nomeImagem;

    // Verifica se a imagem existe
    if (file_exists($caminhoImagem)) {
        // Tenta excluir a imagem
        if (unlink($caminhoImagem)) {
            // Retorna um status 200 (OK) para indicar que a imagem foi excluída com sucesso
            http_response_code(200);
        } else {
            // Retorna um status 500 (Erro interno do servidor) se ocorrer um erro ao excluir a imagem
            http_response_code(500);
        }
    } else {
        // Retorna um status 404 (Não encontrado) se a imagem não existir no servidor
        http_response_code(404);
    }
} else {
    // Retorna um status 400 (Solicitação inválida) se o parâmetro 'imagem' não for fornecido na URL
    http_response_code(400);
}
?>
