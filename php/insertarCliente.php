<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>INSERTAR CLIENTE</h1>
    <h2>Introduce los datos del nuevo producto</h2>
    <form action="./controladorInsertarClientes.php" method="post">
          Código: <input type="text" name="codigo"><br>
          Nombre: <input type="text" name="nombre"><br>
          Apellidos: <input type="text" name="apellidos"><br>
          Dirección: <input type="text" name="dirección"><br>
          Fecha de nacimiento: <input type="date" name="nacimiento"><br>
          <input type="submit" value="Insertar">
    </form>

</body>
</html>