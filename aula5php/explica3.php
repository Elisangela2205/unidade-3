<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica3.php" method="get">
        <p>Vamos somar:</p>
        Digite o 1° número:<input type="number" name="num1"/><br/><br/>
        Digite o 2° número:<input type="number" name="num2"/><br/><br/>
        Qual a operação desejada? <input type="text" name="operacao">
        <input type="submit" value="Calcular"/>
    </form>

    <?php
    $n1=$_GET["num1"];  
    $n2=$_GET["num2"];  
    $operacao =$_GET["operacao"];
    if ($operacao == "+") {
        $aux = $n1 + $n2;
        echo" A soma de ".$n1." com  ".$n2."é".$aux;
    }else if($operacao =="-"){
        $aux = $n1 - $n2;
        echo" A diferença de ".$n1." com ".$n2." é ".$aux;
    }else if($operacao =="*"){
        $aux = $n1 * $n2;
        echo" A multiplicação de ".$n1." com ".$n2." é ".$aux;
    }else if($operacao =="/"){
        $aux = $n1 / $n2;
        echo" A Divisão de ".$n1." com ".$n2." é ".$aux;
    }else {
        echo" Operação invalida!";
    }
    ?>   

</body>
</html>