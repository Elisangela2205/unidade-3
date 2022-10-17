<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica4.php" method="get">
        Digite período que você estuda.
        <select name="periodo">
            <option value="M"> Matutino</option>
            <option value="V"> Vespertino</option>
            <option value="N"> Noturno</option>
</select>
<input type="submit" value="Cadastrar"/>
    </form>
    <?php

    $periodo= $_GET["periodo"];

    if($periodo == "M") {
        echo"Bom dia!";
    }else if($periodo == "V") {
        echo"Boa tarde!";
    }else {
        echo"Boa noite";
    }



?>

</body>
</html>