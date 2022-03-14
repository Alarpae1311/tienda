<html>
  <head>
    <title>Proceso de inserci&oacute;n de nuevo proveedor</title>
  </head>
  <body>
    <h1>Guardando el nuevo proveedor...</h1>
  
<?php 

//incluimos la clase con la que trabajamos
require("./proveedor.php");


//recoger valores del form
$cif = $_POST["cif"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

echo "El cif del proveedor es: $cif<br>";
//hemos recogido datos del formulario... creamos objeto
$proveedorNuevo = new Proveedor($cif,$nombre,$direccion,$email,$telefono);
echo $proveedorNuevo->getCif()."<br>";


//Vamos a por la
$SQLInsert = $proveedorNuevo->getInsertSQL();

echo "La sentencia SQL a ejecutar es: ".$SQLInsert."<br>";

$servername = "bbdd";
$username = "root";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iaw_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

try {
    //la function exec está programada en la clase PDO,
    // y he leido que lo que hace es ejecutar el SQL que tenga
    //el parámetro dentro de la mysql a la que estemos conectados
   $conn->exec($SQLInsert);
   echo "Inserci&oacute;n correcta";
} catch (PDOException $e) {
    echo "Insert failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html">Volver a inicio</a>
</body>
</html>