<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;



$db = new PDO('mysql:host=localhost;'.'dbname=rol;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM usuarios');

  $query->execute();

// $consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
// $resultado=$db->prepare($db,$consulta);

// $filas=mysqli_fetch_array($resultado);
$usuarios = $query->fetchAll(PDO::FETCH_OBJ);
 
echo "<ul>";
foreach($usuarios as $usuario){
   $query = $db->prepare(SELECT*FROM usuarios where usuario=$usuario and contraseña=$contraseña);
   $query->execute([$usuarios->'usuarios' and '$contraseña']);
   $product = $query->fetch(PDO::FETCH_OBJ);
}


if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");

}else
if($filas['id_cargo']==2){ //cliente
header("location:cliente.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($db);
