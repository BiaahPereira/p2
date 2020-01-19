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
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link 
                    <?php  
                        if (isset($_GET['op']))
                            if ($_GET['op']==1)
                                echo 'ative';
                    ?> " href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link
                    <?php  
                        if (isset($_GET['op']))
                            if ($_GET['op']==2)
                                echo 'ative';
                    ?>" href="dois.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php  
                        if (isset($_GET['op']))
                            if ($_GET['op']==3)
                                echo 'ative';
                    ?>" href="tres.php">Contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Opção 4</a>
                </li>
            </ul>
        </header>

        <main>
            <?php

            $titulo = "<title>Programação II</title>";
            $subt = "<h3>Ficha 4 - exercicio 1</h3>";
    
            echo "$titulo <br>";
            echo "$subt <br>";
            echo "Esta é a Página inicial";
    
            ?>
        </main>

    </body>
</html>