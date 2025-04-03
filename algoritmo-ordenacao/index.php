<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 1</title>
</head>

<body>
  <h1> Por Favor preecha o formulario a baixo</h1>
  
  <form action="ordenacao.php" method="POST">
    <table>
      <tr>
      <th>Posição</th>
      <th>Elemento</th>
      </tr>
      <?php
      for($i=1;$i<=10;$i++){
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td><input type\text\"name=\"elementos[] value=\"$i/td>";
        echo"</tr>";
      }
     
?>
    </table>
    

    <?php
    ?>
    <input type="submit" name="envia">

  </form>


</body>
</html>