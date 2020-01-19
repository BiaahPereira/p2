<?php
    /*  **************** Descrição do Documento *************
        * Nome do ficheiro: ex1.php                         *
        * UC: Programação 2                                 *
        * @author <Beatriz Pereira>                         *
        * @version 1.0                                      *
        * Data: 29 de Setembro de 2019                      *
        * Descrição: primeiro exercício prático             *
        *****************************************************
    */
?>
<!DOCTYPE html>
<html lang="pt">
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

        $titulo = "<h3>Contactos</h3>";
        $nome = "Ambrósio Filipe";
        $contacto = "918855940";
        $mail = "ambrósiofilipe@gmail.com";
  
        echo "<br> $titulo <br>";
        echo "Nome: $nome <br>";
        echo "Contacto: $contacto <br>";
        echo "Email: $mail <br>";
    
        ?>
</body>
</html>