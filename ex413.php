<!DOCTYPE HTML>
<Html>
    <HEAD>
        <TITLE>
            Exercício 4.1.3 - Fibonacci
        </TITLE>
        <META charset="UTF-8">
    </HEAD>
    <Body>
        <?php
            $n = 0;
            $n2 = 1;
            $prox = 0;
            $sequencia = 25;
            $i;
            echo "Exibindo sequência de Fibonacci com $sequencia elementos <br>";
            for($i = 1;$i < $sequencia;$i++){
                echo "$prox , ";
                if($i < 2){
                    $prox = $n2 + $n;
                }
                else{
                    $prox = $n2 + $n;
                    $n = $n2;
                    $n2 = $prox;
                }
                if($i == $sequencia - 1){
                    echo "$prox";
                }
            }
            ?>       
    </Body>
</Html>

