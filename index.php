<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Damier PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Damier en PHP</h1>
    <p>Ceci est un damier réalisé en PHP</p>
    <table>
      <?php
        $ligne=4;
        $colonne=4;
          for ($i=0;$i<$ligne; $i++){
            echo '<tr>';
            for ($j=0;$j<$colonne; $j++){
              if(($j+$i)%2==0)
                echo '<td>&nbsp</td>';
              else
                echo '<td bgcolor=black>&nbsp</td>';
              }
          echo '</tr>';
          }
      ?>
    </table>

  </body>
</html>
