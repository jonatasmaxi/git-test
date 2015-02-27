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
                    echo "<table> <tr class=header> <td> Nome </td> <td> Id </td> <td> Desc </td> </tr> ";
                }
                else if(($i % 2 ==0) and ($i !=0)){
                    echo "<tr class=colunapar> <td> Nome </td> <td> Id </td> <td> Desc </td> </tr>";
                }
                else{
                    echo "<tr> <td> Nome </td> <td> Id </td> <td> Desc </td> </tr>";
                }
            }
        ?>
    </body>
</HTML>
