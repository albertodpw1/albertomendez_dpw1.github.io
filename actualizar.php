
<?php 

include("conexion.php/conexBD.php");
$viejo = $_POST['viejo'];
$nuevo = $_POST['nuevo'];

if(isset($_POST['viejo'])){
    $viejo = $_POST['viejo'];
    $nuevo = $_POST['nuevo'];
try{
$campos=array();

/*  validacion para ingresar longitud de caracteres en el formulario para el nombre*/

if($viejo =="" ||strlen($viejo) == 1||strlen($viejo) > 15){
    echo "Error";
    array_push($campos,"El dato a modificar no debe exceder los 15 caracteres ");
}
/*         validacion para ingresar longitud de caracteres en el precio*/
if($nuevo =="" ||strlen($nuevo) ==  1 ||strlen($nuevo) > 15){
    echo"Error";
    array_push($campos,"El dato nuevo debe tener más de un caracter y no debe exceder los 15 caracteres ");
}
if(count($campos) > 0){
    echo "<div class='error'>";
    for($i=0;$i < count($campos);$i++){
        echo "<li>".$campos[$i]."</i>";
    }     
}

if($campos==false){
    
        mysqli_query($conex,"UPDATE catalogo set nombre='$_POST[nuevo]'
        WHERE nombre='$_POST[viejo]'") ;
        
        if($conex){
            echo"<br>";
            echo "<h2>Actualización correcta</h2>";
        }
        else{
            echo "No se realizó la actualización";
        }
}
}
catch(Exception $ex){
    echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
    }
    }


    
?>