<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bicicletas</title>
    <link rel="stylesheet" href="../../../webroot/css/estilo_lucas.css">
</head>
<body>
    <main>
        <section>
            <h1>Cadastro</h1>
            <form action="#">
                <input type="text" id="model_bike" name="model_bike" placeholder="Modelo da bicicleta">
                <input type="text" id="marca_bike" name="marca_bike" placeholder="Marca da bicicleta">
                <input type="text" id="aro" name="aro" placeholder="Aro">
                <button type="submit" onclick="validate()">Cadastrar</button>
            </form>
        </section>
    </main>
</body>
</html>
<script src="../../../webroot/js/js_lucas.js"></script>