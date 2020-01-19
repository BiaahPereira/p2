<!doctype html>
<html lan="pt">
    <head>
        <meta charset="utf-8">
        <title>Exemplo de Bootstrap</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-3.4.1.min.js" async></script>
        <script src="js/bootstrap.min.js" async></script>
    </head>
    <body>
    <header>
        <form class="formEx" name="Exercicio2" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3>Exercício 2</h3>
            <label for="nome">Nome do Produto: </label>
                <input class="input" type="text" name="nome">
        <br><br>
            <label for="decricao">Descrição: </label>
                <input class="input" type="text" name="descricao">
        <br><br>
            <label for="preco">Preço</label>
                <input class="input" type="text" name="preco">
        <br><br>
            <input class="botton" type="submit" value="Enviar dados">
    </form>   
    </header>
    <main>

    <?php
    $nome = $_REQUEST["nome"];
    $descr = $_REQUEST["descricao"];
    $preco = $_REQUEST["preco"];

    echo ("<br>Nome do produto: $nome <br>");
    echo ("Descrição: $descr <br>");
    echo ("Preço: $preco €");
    ?>

    </main>

    </body>
</html>