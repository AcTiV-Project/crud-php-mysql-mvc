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
                  <a href=""></a>
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
                        <?php if (!empty($usuario)): ?>
                              <tr>
                                    <td><?= $usuario['id'] ?></td>
                                    <td><?= $usuario['dni'] ?></td>
                                    <td><?= $usuario['nombre'] ?></td>
                                    <td><?= $usuario['cargo'] ?></td>
                                    <td><?= $usuario['telefono'] ?></td>
                                    <td><?= $usuario['salario'] ?></td>
                              </tr>
                              <?php else: ?>
                              <tr>
                                    <td colspan="6">Usuario no encontrado</td>
                              </tr>
                              <?php endif; ?>

                  </table>       
            </section>
      </div>

      <script src="../js/script1.js"></script>
</body>
</html>