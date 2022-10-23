<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../webroot/css/reset.css">
    <link rel="stylesheet" href="../../../webroot/css/estilo_cars.css">
    <title>Formulario Cars</title>
</head>
<body>
    <main class="conteudo">
        <section class="container" action="">
            <h1 class="titulo">FORMULARIO DE CARROS</h1>
            <form id="formulario" class="formulario" action="">
                <input class="entrada" type="text" name="marca" placeholder="marca do veículo" required>
                <input class="entrada" type="text" name="nome" placeholder="nome do veículo" required>
                <input class="entrada" type="number" placeholder="ano do veículo" required>
                <input class="entrada" type="text" placeholder="cor" required>
                
                <div class="botao-container">
                    <button class="botao">Access</button>
                </div>
            </form>
            <p class="paragrafo">You don't have an account? <span class="negrito">Create account</span></p>
        </section>
        <p class="autor">Create by <span class="nome-autor">Marcos Paulo</span></p>
    </main>
    <script src="../../../webroot/js/js_cars.js"></script>
</body>
</html>