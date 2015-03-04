<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE> Exercício 5 </TITLE>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="ex5.css">
    </HEAD>
    <body>
        <table>
            <thead>
                <td> Turma </td>
                <td> Disciplina </td>
                <td> Semana </td>
                <td> Professor </td>
            </thead>
            <tbody> 
            <?php 
              $horario[0][0] = '02K01';
              $horario[0][1] = 'Tecnologia Web II';
              $horario[0][2] = 'Segunda';
              $horario[0][3] = 'Charles';
              $horario[1][0] = '02J01';
              $horario[1][1] = 'Linguagem de Programação I';
              $horario[1][2] = 'Terça';
              $horario[1][3] = 'João';
              $horario[2][0] = '02K01';
              $horario[2][1] = 'Linguagem De Programação I';
              $horario[2][2] = 'Quarta';
              $horario[2][3] = 'Charles';
              $i;
              $j;
              for($i =0;$i < count($horario);$i++){
                  echo "<tr>";
                  for($j =0;$j <= count($horario);$j++){
                      echo "<td>";
                      echo $horario[$i][$j];
                      echo "</td>";
                  }
                  echo "</tr>";
              }
            ?>
            </tbody>
        </table>
    </body>
</HTML>