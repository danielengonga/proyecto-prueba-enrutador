<?php

class DatabaseConfig {
    // Configura tus credenciales de la base de datos
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "prueba";
    private $charset = "utf8mb4";

    // Almacena la única instancia de la clase
    private static $instance;

    // Constructor privado para evitar la creación de instancias fuera de la clase
    private function __construct() {}

    // Método para obtener la instancia única de la clase (implementación del Singleton)
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Método para obtener la conexión a la base de datos
    public function getConnection() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($dsn, $this->user, $this->pass, $opt);

            return $pdo;
        } catch (PDOException $th) {
            throw $th;
        }
    }
}

// Uso del patrón Singleton para obtener la conexión a la base de datos
$dbConfig = DatabaseConfig::getInstance();
$conexion = $dbConfig->getConnection();

// Ahora, puedes utilizar $conexion para realizar operaciones en la base de datos

?>