<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h3>Inicio de Sesion</h3>
<form method="POS" action="Bienvenido.php">
 Usuario:<br>
 <input type="text" name="txtusuario"><br>
 password:<br>
 <input type="text" name="txtpass"><br>
<br>
 <input type="submit" value="Acceder">
</form>
<?php
 if(isset($_GET['retornar']))
 {
    $error=$_GET['retornar'];
    if($error=="incorrecto"){
        echo "<h4><font color=red>Datos Ingresados incorrecto</font></h4>";
    }
 }
?>
</body>
</html>