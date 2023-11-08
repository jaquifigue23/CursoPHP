<?php
//FUNCTION
function imprimirNombre($Nombre,$apellido=""){
    //rutinas (instrucciones)
    echo "Hola $Nombre $apellido <br/>";

}
//Llamar a la funcion
imprimirNombre("Oscar","Hu");
imprimirNombre("Pedro","Perez");
imprimirNombre("Maria","Magdalena");
imprimirNombre("jazmint","Jasinto");
imprimirNombre("Juana","Lopez");
?>


<?php
function writeMsg() {
  echo "Hello world! <br/>";
}

writeMsg();
?>

<?php
function familyName($fname) {
  echo "$fname Figueróa.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?> 