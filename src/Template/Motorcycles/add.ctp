<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../webroot/css/estilo_motos.css">
    <title>Adicionar Moto</title>
</head>
<body>
    <main>
        <section>
            <h1>Cadastro</h1>
            <form action="#">
                <label for="motor_model"></label>
                <input type="text" id="motor_model" name="motor_model" placeholder="Modelo da moto">
                <input type="text" id="motor_marca" name="motor_marca" placeholder="Marca da moto">
                <input type="text" id="cilindradas" name="cilindradas" placeholder="Cilindradas">
                <button type="submit" onclick="validate()">Cadastrar</button>
            </form>
        </section>
    </main>
</body>
</html>
<script src="../../../webroot/js/js_brunao.js"></script>