<html>
    
<head>
<title>Exercício de revisão de PHP (ordenação)</title>
</head>
<body>

<?php
 
 
    $i = 0;
    foreach ($_POST['elemento'] as $value){
        $vet[$i] = $value;
        $i++;
    } 
   
    
if ($_POST['crescente']==1) {
    # code...

    for($i=0;$i<10;$i++){
        for($j=0;$j<10-1-$i;$j++){
            if($vet[$j]<$vet[$j+1]){
                $swp=$vet[$j];
                $vet[$j]=$vet[$j+1];
                $vet[$j+1]=$swp;
            }
        }
    }
    echo "<br><br>O vetor ordenado  de forma crescente ficou da seguinte forma: <br><br>";
    for($i=0;$i<10;$i++){
        echo "elemento[$i] = $vet[$i]<br>";
    }
}
else if ( $_POST['decrescente']==2) {
    # code...

    for($i=0;$i<10;$i++){
        for($j=0;$j<10-1-$i;$j++){
            if($vet[$j]<$vet[$j+1]){
                $swp=$vet[$j];
                $vet[$j]=$vet[$j+1];
                $vet[$j+1]=$swp;
            }
        }
    }
    echo "<br><br>O vetor ordenado  de forma decrescente ficou da seguinte forma: <br><br>";
    for($i=0;$i<10;$i++){
        echo "elemento[$i] = $vet[$i]<br>";
    }
}

?>

</body>
</html>