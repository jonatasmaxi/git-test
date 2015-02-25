<!DOCTYPE HTML>
<Html>
    <head>
        <meta charset="UTF-8">
        <title> Exercício 4 </title>
    </head>
    <body>  
        <?php
            $p1 = 9.5;
            $m1 = 7;
            $m2 = 6;
            $proj1 = 9;
            $proj2 = 10;
            $proj3 = 9;
            $proj4 = 8;
            $trabf = 10;
            $proc = 9;
            $pf = 5;
            $mi = ((($p1 * 30) + (10 * $m1) + (10 * $m2) + ($proj1 * 5) + ($proj2 * 5) + ($proj3 * 5) + ($proj4 * 5) + ($trabf* 10) + ($proc * 20))/100);
            $aprovadoDireto = false;
            $mf = (($mi + $pf) / 2);
            if($mi >= 7.5){
                $aprovadoDireto = true;
            }
            if($aprovadoDireto == true){
                $mf = $mi;
                echo "Aprovado sem Prova Final <br> Parabéns!!!! Boas Férias <br> Média Final: ".$mi ;
            }
            if($aprovadoDireto == false){
                if($mf >= 5){
                    echo "Aprovado com prova final <br> Agora já pode descansar tranquilo <br> Média Final: .$mf";
                }
                else{
                    echo "Reprovado <br> Não foi dessa vez ano que vem tem mais TWII <br> Média Intermediária: .$mi <br> Média Final: .$mf";
                }
            }
        ?>
    </body>
</Html>