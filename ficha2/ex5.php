<?php
    /*  **************** Descrição do Documento *************
        * Nome do ficheiro: ex5.php                         *
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
<form class="formEx" name="Exercicio5" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Exercício 5</h1>
        <label for="numero">Insira um número</label>
            <input class="input" type="number" name="x">
        <input class="botton" type="submit" value="Enviar dados">
</form>
<?php
    if (isset($_REQUEST["x"])){
    $nx = $_REQUEST['x'];
    echo "<br> Ordem dos números é:";
    for ($i = 0 ; $i <= $nx; $i++) {
    echo " $i " ;
    }}
?>
</body>
</html>