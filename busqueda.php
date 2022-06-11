<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo5.css">

</head>
<body>
  <br>
  <br>

  <div id="buscar">
<form align="center" action="logincatalogo.php" method="post">
    <br>
           <!--     Validacion para solo leer solo letras en este campo -->
 
        <input type="text" name="nombre" placeholder="Ingrese nombre" pattern="[a-zA-Z]+" ><br>

        <input type="text" name="descripcion"  placeholder="Descripción" >
        <br>

        <input type="text" name="presentacion" placeholder="Presentación" >
        <br>
             <!--     Validacion para solo leer solo numeros en este campo -->

        <input type="text" name="precio"  placeholder="Precio" pattern="[0-9]+" >
        <br>
               <!--     Validacion para solo leer solo numeros en este campo -->

        <input type="text" name="cantidad" placeholder="Cantidad" pattern="[0-9]+">
        <br>
                      
        <p align="center"><input type="submit"  value="Enviar"></p>
<br>
<p align="center"><input type="reset"  value="Cancelar"></p>
</form>

</div>

</body>
</html>