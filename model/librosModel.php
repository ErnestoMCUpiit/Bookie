<?php
require_once('db/conexion.php');
class Libro{
    private $db;
    private $libros;
    private $libro;

    public function __construct()
    {
        $this->db=conect::conexion();
        $this->libros=array();
    }

    public function getLibros(){
        $quer="SELECT idProducto, nombre, autor, precio, imagen, cantidad FROM producto";
        $consulta=$this->db->query($quer);
        if($consulta->num_rows > 0){
            return $consulta;
        }
        
    }
    public function getLibroById($idProducto){
        $consulta = $this->db->query("select * from idProducto where idProducto =$idProducto");
        if ($filas = $consulta->fetch_assoc()) {
            $this->libro = $filas;
        }
        return $this->libro;
    }
}
?>