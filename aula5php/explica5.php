<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="explica5.php" method="get">
        Informe o valor do salário:<br/>
        <input type="number" name"salário">
        <br/><br/>
        <input type="submit" value="calcular">
    </form>

    <?php
         $salario = $_GET["salario"];
         if($salario< 280){
            $resjuste = ($salario * 20)/100;
            $novosalario = $salario + $reajuste;
            echo"Valor do reajuste:".$resjuste;
            echo" Valor do salario antigo:".$salario;
            echo" Valor do novo salario:".$novosalario;

         }else if ($salario>=280 && $salario <700){
            $resjuste = ($salario * 15)/100;
            $novosalario = $salario + $reajuste;
            echo"Valor do reajuste:".$resjuste;
            echo" Valor do salario antigo:".$salario;
            echo" Valor do novo salario:".$novosalario;

         }else if{   
            ($salario>=700 && $salario<1500){
            $resjuste = ($salario * 10)/100;
            $novosalario = $salario + $reajuste;
            echo"Valor do reajuste:".$resjuste;
            echo" Valor do salario antigo:".$salario;
            echo" Valor do novo salario:".$novosalario;

         }else{
            $resjuste = ($salario * 5)/100;
            $novosalario = $salario + $reajuste;
            echo" <br/>Valor do reajuste:".$resjuste;
            echo" <br/>Valor do salario :".$salario;
            echo" <br/>Valor do novo salario:".$novosalario;
      }

 ?>   
</body>
</html>