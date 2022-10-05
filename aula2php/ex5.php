<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex5.php">
        Digite sua data de nascimento:<br/>
        <input type="text" name="nascimento"/>
        <br/>
        <input type="submit" value="calcular idade"/>
    </form>
<?php
     $data= $_GET["nascimento"];

     $calculo = 2022 - $data;

     echo"<br/>sua idade é : ".$calculo."voce nasceu em ".$data;

?>
</body>
</html>