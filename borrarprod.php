<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="estilo3.css">
    <style>
     body{
        background: #F5F6CE;

     }
     input[type=submit]{
    border: 0;
    background-color: rgb(174, 255, 0);
    padding: 10px 20px;
}
</style>
</head>
<body>
<form action="borrar.php" method="post" >
    <h2 align="center">Borrar producto</h2>
    <br>
    <br>
        <!--     Validacion para solo leer números en este campo -->

    <p>Clave<input type="text" name="clave" pattern="[0-9]+"></p>
        <!--     Validacion para solo leer letras en este campo -->

    <p>Nombre<input type="text" name="nombre" pattern="[a-zA-Z]+"></p>
        <!--     Validacion para solo leer números en este campo -->

    <p>Precio<input type="text" name="precio" pattern="[0-9]+"></p>
    <br>
    <p align="center"><input type="submit" name="btn" value="Borrar"></p>
    </form>
</body>
</html>