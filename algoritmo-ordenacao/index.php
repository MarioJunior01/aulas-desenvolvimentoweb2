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
    //echo "<td><input type=\"text\" name=\"elemento[]\" value=\"0\"></td>\n";
    echo "<td><input type=\"number\" name=\"elemento[]\"></td>\n";
    echo "</tr>\n\n";
  }
  ?>
</table>
<?php

?>
<input type="submit">
</form>
</body>
</html>