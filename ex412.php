<!DOCTYPE HTML>
<Html>
    <head>
        <title> Exercício Número Primo </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $n = 9;
            $cont = 0;
            $i = 1;
            while($i <= $n){
                if($n % $i == 0){
                    $cont++;
                }
                $i++;
            }
            if($cont <= 2){
                echo "O número é primo";
            }
            else{
                echo "O número não é primo";
            }
        ?>
    </body>
</html>


