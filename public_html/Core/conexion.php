<?php
class Conexion {
    private $host = "localhost";
    private $dbname = "w3schools";
    private $user = "root";
    private $password = "";

    private $PDO;

    public function __construct() {
        try {
            $this->PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function conection() {
        return $this->PDO;
    }
}
?>
