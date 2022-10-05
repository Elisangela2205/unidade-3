<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exp1.php" method="get">
    Digite o valor do Raio:
    <input type="number" name="raio"/>
    <br/><br/>
    <input type="submit" value="Calcular Raio">
</form>
<?php
    //entrada
    $raio = $_GET["raio"];
    //PROCESSAMENTO
    //area = pi * r ao quadrado
    $m_pi = 3.1415;                         
    //$area = $m_pi * $raio* $raio;
     $area = $m_pi * $raio**2;
     $perimetro = 2 * $m_pi * $raio;
    //saida
    echo "<br/> O valor da area " .$area." Do raio informado ".$raio;
    echo "<br/> O valor do perimetro do raio" .$raio." é " .$perimetro;
?>
   