<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 3.Faça um script que peça dois números e imprima a soma.-->

    <form action="ex3.php" method="get">
        Digite o 1° numero:<br/>
        <input type="number" name="numero1"/>
        <br/><br/>
        Digite o 2° número:<br/>
        <input type="number" name="numero2"/>
        <br/><br/>
        <input type="submit" value="Calcular"/>

</form>

<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

$somar = $numero1 + $numero2;

echo" A soma de ".$numero1." com ".$numero2." é : ".$somar;
?>

</body>
</html>