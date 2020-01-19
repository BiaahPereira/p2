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
</head>

<body>
    <form method="REQUEST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="nome"/><br><br>
        Idade: <input type="number" name="ano"/><br><br>
        Sexo: 
            <input type="radio" name="sexo" id="masc" value="homem"/>
            <label for="masc">Masculino</label>
            <input type="radio" name="sexo" id="fem" value="mulher"/>
            <label for="fem">Femenino</label>
        <br><br>
        <input type="submit" valor="enviar">
    </form>
    <?php
        $nome = $_REQUEST["nome"];
        $idade = $_REQUEST["ano"];
        $sexo = $_REQUEST["sexo"];
        
        //$sexo1 = $_REQUEST["masc"];
        //$sexo2 = $_REQUEST["fem"];
        //if ($idade >= 18 && $idade <= 25 && $sexo1) {

        if ($idade >= 18 && $idade <= 25 && $sexo == "homem") {
            echo "($nome) , PARABÉNS! Foi aceite.";
        }else {
            echo "($nome) , Lamentamos, fica para a próxima.";
        }
    ?>
</body>

</html>