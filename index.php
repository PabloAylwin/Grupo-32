<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Productos </h1>
  <p style="text-align:center;">Aquí podrás encontrar información sobre pokemones.</p>

  <br>

  

  <h3 align="center"> ¿Quieres buscar un producto por su ID?</h3>

  <form align="center" action="consultas/consulta_id.php" method="post">
    Id:
    <input type="text" name="id_elegido">
    <br>
    <br>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>


</body>
</html>
