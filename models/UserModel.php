<?php
      class UserModel {
            private $conexion;

            public function __construct($conexion) {
                  $this->conexion = $conexion;
            }

            public function register_user($dni, $nombre, $cargo, $telefono, $salario) {
                  $sql = $this->conexion->prepare(
                        "INSERT INTO usuarios (dni, nombre, cargo, telefono, salario)
                        VALUES (?, ?, ?, ?, ?)"
                  );

                  $sql->bind_param(
                        "ssssd",
                        $dni,
                        $nombre,
                        $cargo,
                        $telefono,
                        $salario
                  );

                  return $sql->execute();
            }

            public function list_user() {
                  $sql = $this->conexion->prepare("SELECT * FROM usuarios");
                  $sql->execute();

                  $result = $sql->get_result();
                  return $result->fetch_all(MYSQLI_ASSOC);
            }

            public function search($dni) {
                  $sql = $this->conexion->prepare(
                        "SELECT * FROM usuarios WHERE dni = ?"
                  );

                  $sql->bind_param("s", $dni);
                  $sql->execute();

                  $result = $sql->get_result();
                  return $result->fetch_assoc();
            }


            public function update($dni, $nombre, $cargo, $telefono, $salario) {
                  $sql = $this->conexion->prepare(
                        "UPDATE usuarios 
                        SET nombre = ?, cargo = ?, telefono = ?, salario = ?
                        WHERE dni = ?"
                  );

                  return $sql->execute([
                        $nombre,
                        $cargo,
                        $telefono,
                        $salario,
                        $dni
                  ]);
            }

            public function delete_user($dni){
                  $sql = $this->conexion->prepare("DELETE FROM usuarios WHERE dni = ?");

                  $sql->bind_param("s", $dni);
                  $sql->execute();

                  return $sql->affected_rows > 0;
            }
      }
?>