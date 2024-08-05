<?php

require_once("conexion.php"); // Incluye el archivo que contiene la clase Conexion

// Clase base para operaciones comunes
    class ModelBase {
        protected $PDO; // Variable protegida para almacenar la conexión PDO

        public function __construct() {
            // Constructor: Inicializa la conexión a la base de datos utilizando la clase Conexion
            $con = new Conexion();
            $this->PDO = $con->conection(); // Obtiene la conexión PDO desde la clase Conexion
        }

        // Método para insertar datos en la base de datos
        public function insertar($table, $data) {
            // $table: Nombre de la tabla
            // $data: Array asociativo con los datos a insertar (clave => valor)

            $columns = implode(", ", array_keys($data)); // Convierte las claves del array $data en una cadena separada por comas
            $placeholders = ":" . implode(", :", array_keys($data)); // Crea los placeholders para la consulta SQL
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)"; // Construye la consulta SQL
            $statement = $this->PDO->prepare($sql); // Prepara la consulta SQL

            // Asigna los valores a los placeholders
            foreach ($data as $key => $value) {
                $statement->bindValue(":$key", $value); // Vincula cada valor del array $data a su correspondiente placeholder
            }

            // Ejecuta la consulta y devuelve el último ID insertado o false en caso de error
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }

        // Método para obtener un solo registro
        public function mostrar($table, $id, $idColumn) {
            // $table: Nombre de la tabla
            // $id: Valor del ID del registro a obtener
            // $idColumn: Nombre de la columna ID

            $statement = $this->PDO->prepare("SELECT * FROM $table WHERE $idColumn = :id"); // Prepara la consulta SQL
            $statement->bindParam(":id", $id); // Vincula el valor del ID al placeholder

            // Ejecuta la consulta y devuelve el registro o false en caso de error
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        // Método para listar todos los registros
        public function mostrarTodo($table) {
            // $table: Nombre de la tabla

            $statement = $this->PDO->prepare("SELECT * FROM $table"); // Prepara la consulta SQL

            // Ejecuta la consulta y devuelve todos los registros o false en caso de error
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        // Método para actualizar los datos en la base de datos
        public function actualizar($table, $data, $id, $idColumn) {
            // $table: Nombre de la tabla
            // $data: Array asociativo con los datos a actualizar (clave => valor)
            // $id: Valor del ID del registro a actualizar
            // $idColumn: Nombre de la columna ID

            $setClause = "";
            foreach ($data as $key => $value) {
                $setClause .= "$key = :$key, "; // Construye la cláusula SET para la consulta SQL
            }
            $setClause = rtrim($setClause, ", "); // Elimina la última coma de la cláusula SET
            $sql = "UPDATE $table SET $setClause WHERE $idColumn = :id"; // Construye la consulta SQL
            $statement = $this->PDO->prepare($sql); // Prepara la consulta SQL

            // Asigna los valores a los placeholders
            foreach ($data as $key => $value) {
                $statement->bindValue(":$key", $value); // Vincula cada valor del array $data a su correspondiente placeholder
            }
            $statement->bindParam(":id", $id); // Vincula el valor del ID al placeholder

            // Ejecuta la consulta y devuelve el ID del registro actualizado o false en caso de error
            return $statement->execute() ? $id : false;
        }

        // Método para eliminar un registro de la base de datos
        public function eliminar($table, $id, $idColumn) {
            // $table: Nombre de la tabla
            // $id: Valor del ID del registro a eliminar
            // $idColumn: Nombre de la columna ID

            $statement = $this->PDO->prepare("DELETE FROM $table WHERE $idColumn = :id"); // Prepara la consulta SQL
            $statement->bindParam(":id", $id); // Vincula el valor del ID al placeholder

            // Ejecuta la consulta y devuelve true si se elimina correctamente, false en caso contrario
            return ($statement->execute()) ? true : false;
        }
    }

?>
