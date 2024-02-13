<?php
// Verifica se o parâmetro da imagem foi passado na URL
if (isset($_GET['imagem'])) {
    $nomeImagem = $_GET['imagem'];
    
    // Define o diretório de origem e destino
    $diretorioOrigem = "uploads/estilo/calca/";
    
   
    $diretorioDestino = "uploads/estilo/pronto/";

    // Caminhos completos para os arquivos
    $caminhoOrigem = $diretorioOrigem . $nomeImagem;
    $caminhoDestino = $diretorioDestino . $nomeImagem;

    // Tenta duplicar a imagem
    if (copy($caminhoOrigem, $caminhoDestino)) {
        echo "Imagem duplicada com sucesso.";
    } else {
        echo "Erro ao duplicar a imagem.";
    }
} else {
    echo "Nenhuma imagem selecionada.";
}
?>
