<?php
      require_once __DIR__ . '/../config/conexion.php';
      require_once __DIR__ . '/../controllers/UserController.php';

      $controller = new UserController($conexion);
      $controller->register();
      $usuarios = $controller->see_users();
?>


<!DOCTYPE html>
<html lang="en">
<head>
      <!--CSS-->
      <link rel="stylesheet" href="../css/style.css">


      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>CRUD PHP-MVC-MYSQL</title>
</head>
<body>
      <div class="grid">
            <header class="header">
                  <button class="btn create" data-form="create">CREATE</button>
                  <button class="btn search" data-form="search">SEARCH</button>
                  <button class="btn update" data-form="update">UPDATE</button>
                  <button class="btn delete" data-form="delete">DELETE</button>
            </header>

            <section class="section">
                  
                  <table>
                                          <tr>
                                                <th>ID</th>
                                                <th>DNI</th>
                                                <th>NOMBRE</th>
                                                <th>CARGO</th>
                                                <th>TELEFONO</th>
                                                <th>SALARIO</th>
                                          </tr>
                        <?php if (!empty($usuarios)): ?>
                              <?php foreach ($usuarios as $usuario): ?>
                                          <tr>
                                                <td><?=$usuario['id']?></td>
                                                <td><?=$usuario['dni']?></td>
                                                <td><?=$usuario['nombre']?></td>
                                                <td><?=$usuario['cargo']?></td>
                                                <td><?=$usuario['telefono']?></td>
                                                <td><?=$usuario['salario']?></td>
                                          </tr>

                                    <?php endforeach; ?>
                              <?php else: ?>
                              <p>No hay artículos publicados.</p>
                        <?php endif; ?>
                  </table>
                              
            </section>
      </div>

      <form class="hidden myform" data-form="create" method="post">
            <h1>Create new user</h1>
            <label for="">Dni</label>
            <input type="text" name="dni" placeholder="Enter a number dni">

            <label for="">Name</label>
            <input type="text" name="nombre" placeholder="Enter a name">

            <label for="">Cargo</label>
            <input type="text" name="cargo" placeholder="Enter a position">

            <label for="">Telephone</label>
            <input type="tel" name="telefono" placeholder="Enter a phone number" id="">

            <label for="">Salario</label>
            <input type="text" name="salario" placeholder="Enter salary" id="">

            <input class="submit submit_create" name="register_user" type="submit" value="CREATE">
      </form>



      <form class="hidden myform" action="/index.php?action=result_search" data-form="search" method="post">
            <h1>Search a user</h1>

            <label for="">Dni</label>
            <input type="text" name="dni" placeholder="Enter a number dni">

            <input class="submit submit_search" type="submit" value="SEARCH">
      </form>

      <form class="hidden myform" action="index.php?action=update" data-form="update" method="post">
            <h1>Update a user</h1>

            <label for="">Dni</label>
            <input type="text" name="dni" placeholder="User ID for update">

            <label for="">Name</label>
            <input type="text" name="nombre" placeholder="New name user">

            <label for="">Cargo</label>
            <input type="text" name="cargo" placeholder="New position">

            <label for="">Telephone</label>
            <input type="tel" name="telefono" placeholder="New number" id="">

            <label for="">Salario</label>
            <input type="text" name="salario" placeholder="New salary" id="">

            <input class="submit submit_update" name="update_user" type="submit" value="UPDATE">
      </form>


      <form class="hidden myform" action="index.php?action=delete" data-form="delete" method="post">
            <h1>Delete a user</h1>

            <label for="">Dni</label>
            <input type="text" name="dni" placeholder="Enter a number dni">

            <input class="submit submit_delete" type="submit" value="DELETE">
      </form>

      <script src="../js/script1.js"></script>
</body>
</html>