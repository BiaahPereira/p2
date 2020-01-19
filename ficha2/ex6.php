<?php
    /*  **************** Descrição do Documento *************
        * Nome do ficheiro: ex6.php                         *
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
    <form class="formEx" name="Exercicio6" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Exercício 6</h1>
        <label for="numero">Insira um valor alfanumérico</label>
            <input class="input" type="string" name="vu">
        <br>
        <label for="numero">Insira um valor alfanumérico</label>
            <input class="input" type="string" name="vd">
        <input class="botton" type="submit" value="Enviar dados">
</form>
    <?php
    $valor1 = $_REQUEST['vu'];
    $valor2 = $_REQUEST['vd'];
    if ( $valor1 == $valor2) {
        echo "<h2>Os valores introduzidos são iguais</h2>";}
    else {echo " <h2>Os valores introduzidos são diferentes</h2>";}
    echo "<br>Número total de caracteres de cada string é: ";
    echo strlen($valor1);
    echo " e ";
    echo strlen($valor2);
    ?>
</body>
</html>