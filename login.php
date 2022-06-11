<?php

include("conexion.php/conexBD.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];
try{
$campos=array();
if($nombre=="" || strlen($nombre) < 5 ||strlen($nombre) > 20){
    echo "Error";
/*Validacion de valores minimos y maximos*/
array_push($campos, "El nombre debe tener más de 3 letras, menos de 20 y deben ser solo letras");
}
/*Validacion de valores minimos y maximos*/
if($usuario =="" ||strlen($usuario) < 3 ||strlen($usuario) > 8){
    array_push($campos,"El usuario debe tener más de 3 letras y menos de 8");
}
/*Validacion de valores minimos y maximos*/
if($password =="" ||strlen($password) < 3 ||strlen($password) > 12){
    array_push($campos,"La contraseña debe tener más de 3 letras y menos de 12");
}

if(count($campos) > 0){
    echo "<div class='error'>";
    for($i=0;$i < count($campos);$i++){
        echo "<li>".$campos[$i]."</i>";
    }
}
  
if($campos==false){
    $consulta = "INSERT INTO acceso_usuarios(nombre, usuario, contrasena) 
    VALUES ('$nombre','$usuario','$password')";
     $resultado = mysqli_query($conex, $consulta);
if($resultado){
echo "<br>";
echo "<br>";
echo "<h2>Datos guardados en la base de datos</h2>";
}
else{
echo "<br>";
echo "<br>";
echo "Error en la conexión";
}
}
}
catch(Exception $ex){
    echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
    }
    
    }

?>
