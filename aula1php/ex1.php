<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--entrada-->
    <form action="ex1.php" method="get">
        Nome:<br/>
        <input type="text" name="nome" placeholder="Digite seu nome"/></br/>
        <br/>
 <input type="submit" value="Enviar"/>
</form>
<?php
//pegar dados do formulario
$nome=$_GET["nome"];

//saida de dados
echo"Nome:".$nome;

?>
</body>
</html>