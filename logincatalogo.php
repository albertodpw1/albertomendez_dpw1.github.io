<?php

include("conexion.php/conexBD.php");

$nombre =$_POST['nombre'];
$descripcion = $_POST['descripcion'];
$presentacion = $_POST['presentacion'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$presentacion = $_POST['presentacion'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

try{
  
            $campos=array();
            if($nombre=="" || strlen($nombre) < 5 ||strlen($nombre) > 20){
                echo "Error";
            array_push($campos, "El nombre debe tener más de 3 letras y menos de 20");
            }
            
            if($descripcion == "" || strlen($descripcion) > 50){
                array_push($campos,"La descripción no puede exceder los 50 caracteres");
            }
            /*             validaciones de valores mínimos y máximos*/

            if($presentacion=="" || strlen($presentacion) < 3 ||strlen($presentacion) > 20){
            array_push($campos, "La presentacion debe tener más de 3 letras y menos de 20");
            }
/*             validaciones de valores mínimos y máximos*/
            if($precio == ""  || $precio < 100 || $precio > 2000){
                array_push($campos,"El precio debe ser mayor que 100 y menor de 2000");
            }
            
            if($cantidad == "" || strlen($cantidad) < 1 || strlen($cantidad) > 500){
                array_push($campos,"La cantidad no puede rebasar los 500 productos ");
            }
            if(count($campos) > 0){
    echo "<div class='error'>";
    for($i=0;$i < count($campos);$i++){
        echo "<li>".$campos[$i]."</i>";
    }
}
      
        if($campos==false){

            $consulta= "INSERT INTO buscar_producto(nombre, descripcion, presentacion, precio, cantidad) 
            VALUES ('$nombre','$descripcion','$presentacion','$precio','$cantidad')";
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