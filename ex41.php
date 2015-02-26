<!DOCTYPE HTML>
<HTML>
    <Head>
        <title> Exercício 4.1 </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="ex2.css"/>
    </Head>
    <body>
        <?php 
            $i = 0;
            for($i = 0;$i < 8;$i++){
                if($i == 0){
                    echo "<table > <thead> <th> <td> NOME </td> <td> ID </td> <td> DESC </td> </th> </thead> </table>";
                }
                else if($i % 2 ==0){ 
                    echo "<table class=colunapar> <tr> <td> Nome </td> <td> id </td> <td> desc </td> </tr> </table>";
                }
                else{
                    echo "<table> <tr> <td> Nome </td> <td> id </td> <td> desc </td> </tr> </table>";
                }
            }
        ?>
    </body>
</HTML>
