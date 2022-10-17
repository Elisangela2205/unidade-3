<?php

$idade = $_GET["idade"];
if($idade <16){
    echo"Não pode votar...";
}else if ($idade <18){
    echo"seu voto é facultativo...";
}else if ($idade <=70){
    echo"Voto obrigatório..";
}else{
    echo"voto Facultativo...";
}



?>