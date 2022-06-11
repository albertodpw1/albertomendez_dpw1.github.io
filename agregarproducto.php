
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
        array_push($campos,"El nombre no debe exceder los 15 caracteres ");
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

    if($campos==false){
        $consulta = "INSERT INTO catalogo(clave, nombre, precio) 
        VALUES ('$clave','$nombre','$precio')";
         $resultado = mysqli_query($conex, $consulta);
        if($resultado){
        echo "<br>";
        echo "<br>";
        echo "<h2>Datos guardados en la base de datos</h2>";
        echo "<br>";
        }
        else{
        echo "<br>";
        echo "<br>";
        echo "Error en la conexión";
        echo "<br>";
        }
    }
}
   
catch(Exception $ex){
    echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
    }
    
    }


?>