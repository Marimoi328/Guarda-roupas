<!DOCTYPE html>
<html>
<head>
    <title>Roupas</title>
</head>
<body>

<h1>Roupas</h1>

<div class="conteudo-roupas">
    <p>Aqui está o conteúdo da página de roupas.</p>

    <!-- Botão para mostrar/ocultar bermuda -->
    <button id="toggleBermuda">Mostrar Bermuda</button>

    <!-- Div para mostrar o conteúdo da bermuda -->
    <div id="conteudoBermuda" style="display: none;">
        <?php
        // Incluindo o conteúdo da página bermuda.php
        include 'bermuda.php';
        ?>
    </div>
</div>

<script>
    // Capturando o botão e o conteúdo da bermuda
    const toggleButton = document.getElementById('toggleBermuda');
    const bermudaContent = document.getElementById('conteudoBermuda');

    // Adicionando evento de clique ao botão
    toggleButton.addEventListener('click', function() {
        // Alternando a exibição da bermuda
        if (bermudaContent.style.display === 'none') {
            bermudaContent.style.display = 'block';
            toggleButton.textContent = 'Ocultar Bermuda';
        } else {
            bermudaContent.style.display = 'none';
            toggleButton.textContent = 'Mostrar Bermuda';
        }
    });
</script>

</body>
</html>
