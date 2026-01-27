<?php
      require_once __DIR__ . '/../models/UserModel.php';

      class UserController {
            private $model;

            public function __construct($conexion) {
                  $this->model = new UserModel($conexion);
            }

            public function index() {
                  require_once "views/formulario.php";
            }

            public function register() {
                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_user'])) {

                        $dni      = trim($_POST['dni'] ?? '');
                        $nombre   = trim($_POST['nombre'] ?? '');
                        $cargo    = trim($_POST['cargo'] ?? '');
                        $telefono = trim($_POST['telefono'] ?? '');
                        $salario  = trim($_POST['salario'] ?? '');

                        if (
                        !empty($dni) &&
                        !empty($nombre) &&
                        !empty($cargo) &&
                        !empty($telefono) &&
                        is_numeric($salario)
                        ) {

                        $result = $this->model->register_user(
                              $dni,
                              $nombre,
                              $cargo,
                              $telefono,
                              $salario
                        );

                        if ($result) {
                              header("Location: index.php?action=formulario&success=1");
                              exit;
                        } else {
                              header("Location: index.php?action=formulario&error=1");
                        }

                        } else {
                              echo "Todos los campos son obligatorios";
                        }
                  }
            }

            
            public function see_users(){
                  return $this->model->list_user();                            
            }

            public function search_user() {
                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        $dni = $_POST['dni'] ?? '';

                        $usuario = $this->model->search($dni);

                        require_once __DIR__ . '/../view/result_search.php';
                  }
            }

            public function update_user() {
                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {

                        $dni      = trim($_POST['dni'] ?? '');
                        $nombre   = trim($_POST['nombre'] ?? '');
                        $cargo    = trim($_POST['cargo'] ?? '');
                        $telefono = trim($_POST['telefono'] ?? '');
                        $salario  = trim($_POST['salario'] ?? '');

                        if (
                              !empty($dni) &&
                              !empty($nombre) &&
                              !empty($cargo) &&
                              !empty($telefono) &&
                              is_numeric($salario)
                        ) {
                              $this->model->update(
                              $dni,
                              $nombre, 
                              $cargo,
                              $telefono,
                              $salario
                              );

                              header("Location: index.php?action=formulario&success=1");
                              exit;
                        }
                  }
            }

            public function delete(){
                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        $dni = trim($_POST['dni'] ?? '');

                        if ($dni === '') {
                              echo "El DNI es obligatorio";
                              return;
                        }

                        if ($this->model->delete_user($dni)) {
                              header("Location: index.php?action=formulario&success=1");
                              exit;
                        } else {
                              header("Location: index.php?action=formulario&error=1");
                        }
                  }
            }

      }
?>