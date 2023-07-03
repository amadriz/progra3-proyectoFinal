<?php

class conn{

    private $server;
    private $usuario;
    private $pass;
    private $db;


    function __construct($server, $usuario, $pass, $db){
        $this->server = 'localhost';
        $this->usuario = 'root';
        $this->pass = '';
        $this->db = 'uh';
        $this->connect();
    }

    // Método para conectarse
    private function connect() {
        $this->mysqli = new mysqli($this->server, $this->usuario, $this->pass, $this->db);

        if ($this->mysqli->connect_error) {
            die("La conexión falló: " . $this->mysqli->connect_error);
        }
    }

    public function getConnection() {
        return $this->mysqli;
    }

    public function closeConnection() {
        $this->mysqli->close();
    }


}

//Credenciales conexion db

$host = "localhost";
$username = "root";
$password = "";
$database = "uh";

// Nueva instancia de la clase conn.
$conn = new Conn($host, $username, $password, $database);

//Objeto mysqli
$mysqli = $conn->getConnection();

// Operaciones dentro de la base de datos
//Insertar datos
mysqli_query($mysqli,"INSERT INTO login VALUES('Pedro','Rojas','Campos','122112','user1','1234556')");

// Cerrar la conexion
$conn->closeConnection();



?>