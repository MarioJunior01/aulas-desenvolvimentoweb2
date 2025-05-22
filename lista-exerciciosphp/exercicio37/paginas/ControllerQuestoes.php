<?php
$gabarito= array('a','b','c','d');
$respostas = array($_POST['contact1'],$_POST['contact2']);

foreach($respostas as $key => $value) {
    print("$value");
}


?>