<?php
/*
        ************ DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex7.php                    *
        * UC: P2                                       *
        * @author <Beatriz Pereira>                    *
        * @version 1.0                                 *
        * Data: 30 Setembro de 2019                    *
        * Descrição: Setimo exercício da ficha 3       *                                   
        ************************************************
        */
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Ex7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
    
        <form name= "ex2" method="POST" action="<?php echo $_SERVER ['PHP_SELF']; ?>">
            <input type = "submit" name="submit" value="Gere a tua palavra-pass!">

            <br><br>

        </form>

        <?php
        if (isset($_REQUEST["submit"])) {
        function geraSenha($tamanho = 8) {
            $valores = "ABCDEFGHIJKLMNOPQRSTUVXZabcdefghijklmnopqrstuvxz0123456789&@#*_?";
            return substr(str_shuffle($valores), 0 , $tamanho);}
            echo " A sua palavra-pass é a seguinte: ".geraSenha();}
        ?>
</body>

</html>