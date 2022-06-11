
<?php 


include("conexion.php/conexBD.php");
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

if(isset($_POST['clave'])){
    $clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
try{
$campos=array();
if($clave=="" || strlen($clave) < 1 ||strlen($clave) > 3 ){
    echo "Error";

array_push($campos, "La clave debe contener 3 caracteres y deben ser solo números");
}
/*  validacion para ingresar longitud de caracteres en el formulario para el nombre*/

if($nombre =="" ||strlen($nombre) < 1 ||strlen($nombre) > 15){
    array_push($campos,"El nombre no debe exceder los 15 caracteres y deben ser solo letras ");
}
/*         validacion para ingresar longitud de caracteres en el precio*/

if($precio =="" ||$precio < 100 || $precio > 2000){
    array_push($campos,"El precio debe ser mayor a $100 y menor a $2000");
}
if(count($campos) > 0){
    echo "<div class='error'>";
    for($i=0;$i < count($campos);$i++){
        echo "<li>".$campos[$i]."</i>";
    }     
}

if($campos ==false){
    mysqli_query($conex,"DELETE FROM catalogo WHERE nombre= '$_POST[nombre]'");
    if($conex){
        echo "<h2>Dato eliminado</h2>";    
    }
    else{    
        echo "No se pudo eliminar el dato";
    }
}   
    }    

    catch(Exception $ex){
        echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
        }
        
        }

?>