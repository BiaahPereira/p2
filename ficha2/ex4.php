<?php
    /*  **************** Descrição do Documento *************
        * Nome do ficheiro: ex4.php                         *
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
    <title>exercicio2</title>
</head>
<body>
<form class="formEx" name="Exercicio2" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Exercício 4</h1>
        <hr>
        <div class="center">
            <div class="align">
                <label for="numero">Introduza o valor de A</label>
                <input class="input" type="number" name="na">
            </div>
            <div class="align">
                <label for="numero">Introduza o valor de B</label>
                <input class="input" type="number" name="nb">
            </div>
            <div class="align">
                <label for="numero">Introduza o valor de C</label>
                <input class="input" type="number" name="nc">
            </div>
            <div class="align">
                <label for="numero">Introduza o valor de D</label>
                <input class="input" type="number" name="nd">
            </div>
        </div>
        <input class="botton" type="submit" value="Enviar dados">
    </form>
    <?php
        $ordemEntrada = array($_REQUEST["na"], $_REQUEST["nb"], $_REQUEST["nc"], $_REQUEST["nd"]);
        sort($ordemEntrada);
        echo "<form class=\"formResp\">
                <div class=\"center\">
                    <div class=\"align\">
                        <p>Números pela ordem de Crescente: $ordemEntrada[0], $ordemEntrada[1], $ordemEntrada[2], $ordemEntrada[3].</p>
                    </div>
                </div>
             </form>";
    ?>
</body>
</html>