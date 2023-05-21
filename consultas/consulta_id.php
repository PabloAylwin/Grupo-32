<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $id_nuevo = $_POST["id_elegido"];
  $query = "SELECT * FROM productos where id = $id_nuevo;";
	$result = $db -> prepare($query);
	$result -> execute();
	$productos = $result -> fetchAll();

  ?>

	<table>
    <tr>
      <th>id</th>
      <th>nombre</th>
      <th>precio</th>
      <th>numero_cajas</th>
      <th>tipo</th>
      <th>tamaño</th>
      <th>color</th>
      <th>descripcion</th>
      <th>dimensiones</th>
      <th>material</th>
      <th>carga</th>
      <th>frecuencia</th>
      <th>potencia</th>
      <th>tension</th>
    </tr>
  <?php
	foreach ($productos as $producto) {
  		echo "<tr><td>$producto[0]</td><td>$producto[1]</td><td>$producto[2]</td><td>$producto[3]</td><td>$producto[4]</td><td>$producto[5]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
