<?php

// require_once("modelos/producto.php");
class InicioControlador{

    public $modelo;

    public function __construct(){
        // $this -> modelo = new Producto();
   }

   public function Inicio(){
    require_once "vistas/encabezado.php";
    require_once "vistas/inicio/principal.php";
    require_once "vistas/pie.php";
   }

   public function guardar(){
    $nuevoUsuario = new Usuario(null, $_POST
    ['nombre'], $_POST['correo'], $_POST['rol'], 
    $_POST['telefono']);
    
    $nuevoUsuario->insertar();
    }

   
}

