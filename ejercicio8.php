<?php
if($_POST){
    $valorA = $_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $division=$valorA/$valorB;
    $multiplicacion=$valorA*$valorB;


    echo "<br/>la suma es ".$suma;
    echo "<br/>la resta es ".$resta;
    echo "<br/>la division es ".$division;
    echo "<br/>la multiplicacion es ".$multiplicacion;

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
    
<form action="ejercicio8.php" method="post">
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