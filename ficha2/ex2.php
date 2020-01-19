<?php
    /*  **************** Descrição do Documento *************
        * Nome do ficheiro: ex2.php                         *
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
<form method="POST" action=<?php echo $_SERVER['PHP_SELF'] ?>>
  Insira o primeiro valor :<br>
  <input type="text" name="numa">
  <br>
  Insira o segundo valor : <br>
  <input type="text" name="numb">
  <br>
  Insira o terceiro valor :<br>
  <input type="text" name="numc">
  <br>
  Insira o quarto valor :<br>
  <input type="text" name="numd">
  <br>
  <input type="submit" value="Submit">
</form> 

        <?php

        $numeroA = $_POST['numa']; 
        $numeroB = $_POST['numb'];  
        $numeroC = $_POST['numc'];  
        $numeroD = $_POST['numd']; 
        
        $soma = $numeroA + $numeroC;
        $mult = $numeroB * $numeroD;

        if ($soma>$mult){
            echo "A soma é maior que a multiplicação";
        }else if($soma<$mult){
                echo "A soma é menor que a multiplicação";
            }else  {
                    echo "A soma é igual a multiplicação";
                }
    ?>
</body>
</html> 