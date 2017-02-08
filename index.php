<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JUEGO DE TRONOS</title>
  </head>
  <body>
<center><h1>JUEGO DE TRONOS</h1></center>
<table border="1">
<tr>
<td><a href="actores.php">ACTORES</a></td>
<td><a href="actorestemp.php">ACTORES TEMPORADA</a></td>

  </tr>
  </table>
  <?php
//conectar base de datos
    include 'tronosdb.php';
    $tronos = new tronosdb();


  $resultado=$tronos->inicio();
  while($fila=$resultado->fetch_assoc()){
    echo "<br>";
    echo "TITULO: ".$fila["title"];
    echo "<br>";
    echo "CREADOR: ".$fila["creators"];
    echo "<br>";
    echo "EMPIEZA EN EL AÑO: ".$fila["season_start"];
    echo "<br>";
    echo "ACABA EN EL AÑO: ".$fila["season_end"];
    echo "<br>";
    echo "RESUMEN: ".$fila["plot"];

    }


?>
  </body>
</html>
