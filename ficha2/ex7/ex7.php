<?php
    /*  **************** Descrição do Documento *************
        * Nome do ficheiro: ex7.php                         *
        * UC: Programação 2                                 *
        * @author <Beatriz Pereira>                         *
        * @version 1.0                                      *
        * Data: 29 de Setembro de 2019                             *
        * Descrição: segundo exercício prático             *
        *****************************************************
    */
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <a href='index.html'></a>
</head>
<body>
    <?php
        echo "<h3><strong>Notas submetidas pelo utilizador:</strong></h3>";
    $nt = $_REQUEST["nt"];
        echo "A nota do teste: $nt valores<br>";
    $nt = $nt * 0.3;
    $ntr = $_REQUEST["ntr"];
        echo "A nota do trabalho: $ntr valores<br>";
    $ntr = $ntr * 0.2;
    $pf = $_REQUEST["pf"];
        echo "A nota do projeto final: $pf valores<br>";
    $pf = $pf * 0.5;
    $nf = $nt + $ntr + $pf; 
        echo "<h3><strong>No final equivale a:</strong></h3>";
        echo "Nota do teste: $nt valores (ponderação: 30%)<br>";
        echo "Nota do trabalho: $ntr valores (ponderação: 20%)<br>";
        echo "Nota do projeto final: $pf valores (ponderação: 50%)<br>";
        echo "<strong>Nota final do aluno: $nf valores</strong>";
    ?>
</body>
</html>