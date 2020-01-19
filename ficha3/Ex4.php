<?php
    /*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex4.php                    *
        * UC: P2                                       *
        * @author <Beatriz Pereira>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Quarto exercício da ficha 3       *                                   
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Ex4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
    <form class="formEx" name="Exercicio2" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h1>Exercício 4</h1>
            <hr>
            <div class="center">
                <div class="align">
                    <label for="numero">Introduza um número <strong>Inteiro:</strong></label>
                    <input class="input" type="number" name="nA">
                </div>
            </div>
            <input class="botton" type="submit" value="Enviar dados">
    </form> 
    <?php
        if (isset($_REQUEST["nA"])){
            $nA = $_REQUEST["nA"];
            $sec = array();
            echo "<form class=\"formResp\">
                    <h2 class=\"resposta\">Resposta:</h2>
                    <hr>
                    <div class=\"center\">
                        <div class=\"align\">
                            <p>Os números desde 0 a $nA são: </p>
                        </div>
                    </div>
                 </form>";

            for ($i=0; $i <= $nA; $i++) {
                $sec[$i] = $i;
                print $sec;
            }
        }
                
    ?>
    </body>
</html>