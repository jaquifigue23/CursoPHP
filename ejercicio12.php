<?php

//if else
if($_POST){
    $valorA = $_POST['valorA'];
    $valorB=$_POST['valorB'];

    if($valorA != $valorB){
        echo "el valor de A es diferente al valor B";

    }else{
         echo "el valor de A es igual al de B";
      }   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Aritmeticas</title>
</head>
<body>
    
<form action="ejercicio12.php" method="post">
    valor A:
    <input type="text" name="valorA" id="">
    <br/>
    valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">
</form>

</body>
</html>