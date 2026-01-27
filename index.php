<?php
      require_once "config/conexion.php";
      require_once "controllers/UserController.php";

      $controller = new UserController($conexion);

      // acción por defecto
      $action = $_GET['action'] ?? 'panel';

      switch ($action) {
            case 'register':
                  $controller->register_user();
                  break;

            case 'result_search':
                  $controller->search_user();
                  break;

            case 'update':
                  $controller->update_user();
                  break;

            case 'delete':
                  $controller->delete();
                  break;

            case 'formulario':
                  require_once "view/formulario.php";
                  break;

            default:
                  require_once "view/panel.php";
                  break;
      }
?>