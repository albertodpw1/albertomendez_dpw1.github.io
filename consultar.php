
<?php 
   
include("conexion.php/conexBD.php");
$clave = $_POST['clave'];


if(isset($_POST['clave'])){
    $clave = $_POST['clave'];
 
try{
    $campos=array();
    if($clave=="" || strlen($clave) < 1 ||strlen($clave) > 3 ){
        echo "Error";
        array_push($campos, "La clave debe contener 3 caracteres y deben ser solo numeros");
    
    }
    if(count($campos) > 0){
        echo "<div class='error'>";
        for($i=0;$i < count($campos);$i++){
            echo "<li>".$campos[$i]."</i>";
        }     
    }
    
       if($campos==false){
        $clave = $_POST['clave'];
        $leer=mysqli_query($conex,"SELECT * FROM catalogo WHERE clave = $clave");
        echo "<h2>DATOS CONSULTADOS</h2>";
        echo "Nombre | Clave | Precio";

        echo "<br>";
        while($consulta = mysqli_fetch_array($leer)){      
        if($consulta){   
            echo $consulta['nombre']," | ";
            echo $consulta['clave'], " | ";
            echo $consulta['precio'], " | ";
            echo "<br> ";    
        }  
        else{
            echo "Ocurrió un error";
        }
        }
       }
}
catch(Exception $ex){
    echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
    }
    
    }

?>