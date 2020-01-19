<?php
    /*  **************** Descrição do Documento *************
        * Nome do ficheiro: ex1.php                         *
        * UC: Programação 2                                 *
        * @author <Beatriz Pereira>                         *
        * @version 1.0                                      *
        * Data: 29 de Setembro de 2019                             *
        * Descrição: primeiro exercício prático             *
        *****************************************************
    */
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Exercicio1</title>
        <meta name="viewport" content="widht=device-widht, initial-scale=1">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
    </head>
    <body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?>>
  Insira o valor :<br>
  <input type="text" name="numero">
  <br>
  <input type="submit" value="Submit">
</form> 
    <?php
        $num = $_GET['numero'];   
        if ($num<100){
            echo "O número $_GET[numero] é menor que 100";
        }else if($num>100){
                echo "O número $_GET[numero] é maior que 100";
            }else  {
                    echo "O número $_GET[numero] é igual a 100";
                }
    ?>
    </body>
</html>