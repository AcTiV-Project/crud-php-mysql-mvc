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
      <form class="hidden myform" data-form="create" method="post">
            <h1>Create new user</h1>

            <label for="">Dni</label>
            <input type="text" name="dni" placeholder="Enter a number dni" value="<?= $usuario['dni']?>">

            <label for="">Name</label>
            <input type="text" name="nombre" placeholder="Enter a name" value="<?= $usuario['nombre']?>">

            <label for="">Cargo</label>
            <input type="text" name="cargo" placeholder="Enter a position" value="<?= $usuario['cargo']?>">

            <label for="">Telephone</label>
            <input type="tel" name="telefono" placeholder="Enter a phone number" id="" value="<?= $usuario['telefono']?>">

            <label for="">Salario</label>
            <input type="text" name="salario" placeholder="Enter salary" id="" value="<?= $usuario['salario']?>">

            <input class="submit submit_update" name="register_user" type="submit" value="UPDATE">
      </form>
</body>
</html>