<html>
<head>
<title>Exercício de revisão de PHP (form)</title>
<link rel="stylesheet" href="style.css">

</head>
<body class="body">
<form method="post" action="ordenacao.php">


<table>
  <tr>
    <th>Posição</th>
    <th>Elemento</th>
  </tr>
  <?php
  for($i=0;$i<10;$i++){
    echo "<tr>\n";
    echo "<td>$i</td>\n";

    echo "<td><input type=\"number\" name=\"elemento[]\"></td>\n";
    echo "</tr>\n\n";
  }
  ?>
</table>
<div>
<label for="crescente">crescente</label><input type="radio" name="crescente" id="crescente" value="1">

</div>
<div>
<label for="decrescente">decrescente</label> <input type="radio" id="decrescente" name="decrescente" value="2">

</div>


<input type="submit">
</form>
</body>
</html>