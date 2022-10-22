<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Computadores</title>
    <link rel="stylesheet" href="../../../webroot/css/estilo_computers.css">
    <body>
    <main>
        <section>
            <h1>Cadastro do PC</h1>
            <form action="#">
                <input type="text" id="tamanho_monitor" name="tamanho_monitor" placeholder="Qual é o tamanho do monitor?">
                <input type="text" id="quantidade_mem_ram" name="quantidade_mem_ram" placeholder="Quantos Gigas de Mem Ram?">
                <input type="text" id="ssd_gigas" name="ssd_gigas" placeholder="Qauntos Gigas tem o SSD? ">
                <button type="submit" onclick="validate()">ENVIAR</button>
            </form>
        </section>
    </main>
</body>
</html>
<script src="../../../webroot/js/js_computer.js"></script>
    

