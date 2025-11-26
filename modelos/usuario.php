<?php
class Usuario{

    private $id;
    private $nombre;
    private $correo;
    private $rol;
    private $telefono;
    
    //create a constructor full parameters
    public function __construct($id, $nombre, $correo,
    $rol, $telefono){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->rol = $rol;
        $this->telefono = $telefono;
    }

    public static function connect(){
        $host = 'localhost';
        $nombreBD = 'adso3146013';
        $usuario = 'root';
        $password = '';
        
        try{
            $conexion = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8", $usuario, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            echo "Error de conexión:".$e->getMessage();
        }
    }

    public function insertar(){
        $conexion = self::connect();
        $query = "INSERT INTO   usuarios (nombre, correo, rol, telefono) VALUES (:nombre, 
        :correo, :rol, :telefono)";
        $statement = $conexion->prepare($query);
        $statement->bindparam('nombre',
        $this->nombre);
        $statement->bindparam('correo',
        $this->correo);
        $statement->bindparam('rol',
        $this->rol);
        $statement->bindparam('telefono',
        $this->telefono);
        $statement->execute();
    }

    public static function consultarTodos(){
        $conexion = self::connect();
        $query = "SELECT * FROM usuarios";
        $statement = $conexion->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Usuario', ['id', 'nombre', 'correo', 'rol', 'telefono']);
    }
    

    public function getId(){
        return $this->id;
    }
    public function setID($id){
        $this->id = $id;        
    }
    public function getNombre(){
        return $this-> nombre;
    }
    public function setNombre( $nombre){
        $this-> nombre = $nombre;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        $this-> correo = $correo;
    }
    public function getRol(){
        return $this-> rol;
    }
    public function setRol($rol){
        $this-> rol = $rol;
    }
    public function getTelefono(){
        return $this-> telefono;
    }
    public function setTelefono($telefono){
        $this-> telefono = $telefono;
    }
}
