<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTORES</title>
  </head>
  <body>
  <table border="1">
    <tr>
      <center><h1>ACTORES</h1></center>
      <td><a href="index.php">INDEX</a></td>
      <td><a href="actorestemp.php">ACTORES TEMPORADA</a></td>

    </tr>
  </table>

<?php
include 'tronosdb.php';
$tronos = new tronosdb();

$resultado=$tronos->actores();
echo "<table border=1>";
while($fila=$resultado->fetch_assoc()){
  echo "<tr>";

  echo "<td>".$fila["full_desc"]."</td>";

  echo "<td>".$fila["serie_name"]."</td>";

  echo "<td>".$fila["episodes"]."</td>";

  echo "<td>".$fila["season_start"]."</td>";

  echo "<td>".$fila["season_end"]."</td>";

  echo "<td>".$fila["name"]."</td>";
  echo "</tr>";
}
echo "</table>";
 ?>

  </body>
</html>
