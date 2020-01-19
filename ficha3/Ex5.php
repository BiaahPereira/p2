<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex5.php                    *
        * UC: P2                                       *
        * @author <Beatriz Pereira>                     *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Quinto exercício da ficha 3       *                                   
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Ex5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <form class="formEx" name="Exercicio2" method="REQUEST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Exercício 5</h1>
        <hr>
        <div class="center">
            <div class="align">
                <label for="numero">Introduza um número <strong>Inteiro entre 1 e 10:</strong></label>
                <input class="input" type="number" name="nT">
            </div>
        </div>
        <input class="botton" type="submit" value="Enviar dados">
    </form>
    <?php
    if (isset($_REQUEST["nT"])) {
        $nT = $_REQUEST["nT"];
        $tabuada = 0;

        switch ($nT) {
            case '1':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '2':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '3':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '4':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '5':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '6':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '7':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '8':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '9':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            case '10':
                echo "<form class=\"formResp\">
                        <h2 class=\"resposta\">Resposta:</h2>
                        <hr>
                     </form>";
                for ($i = 1; $i <= 10; $i++) {
                    $tabuada = $nT * ($i);
                    echo "<form class=\"formResp\">
                            <div class=\"center\">
                                <div class=\"align\">
                                    <p>$nT X $i = $tabuada<br></p>
                                </div>
                            </div>
                         </form>";
                }
                break;
            default:
                echo "<form class=\"formResp\">
                        <div class=\"center\">
                            <h2 class=\"resposta\">Resposta:</h2>
                            <hr>
                            <div class=\"align\">
                                <p>ERRO! Insira um número entre 1 e 10!</p>
                            </div>
                        </div>
                     </form>"; 
        }
    }
    ?>
</body>

</html>