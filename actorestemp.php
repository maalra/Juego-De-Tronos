<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTORES TEMPORADA</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <center><h1>ACTORES TEMPORADA</h1></center>
        <td><a href="index.php">INDEX</a></td>
        <td><a href="actores.php">ACTORES</a></td>

      </tr>
    </table>
    <?php
    include 'tronosdb.php';
    $tronos = new tronosdb();

    $resultado=$tronos->actores2();
    echo "<table border=1>";
    while($fila=$resultado->fetch_assoc()){
      echo "<tr>";

      echo "<td>".$fila["name"]."</td>";

      echo "<td>".$fila["serie_name"]."</td>";

      echo "<td>".$fila["episode"]."</td>";

      echo "</tr>";
    }
    echo "</table>";


     ?>


  </body>
</html>
