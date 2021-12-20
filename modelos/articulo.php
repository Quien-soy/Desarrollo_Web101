<?php
require_once('modelo.php');

//modelo categoria
class Articulo extends Modelo{
    private $id;
    private $nombre_tabla;
    
    /*
    CONSTRUCTOR
    DESCRIPCION: Conecta a la BD 
    */
    public function __construct() {
        parent::__construct();
        $this->id = 'art_id';
        $this->nombre_tabla = 'articulo';
    }
    //Obtener todos los registros de la tabla categoria
    public function get_all(){
        $consulta = "SELECT * FROM $this->nombre_tabla";
        $resultado = $this->db->query($consulta);
        if(!$resultado){
            echo "Error ala listar los datos de la tabla";
        }else{
            return $resultado->fetch_all(MYSQLI_ASSOC); //array asociativo: matriz bidimencional
            $resultado->close();
            $this->db->close();
        }
    }
    //Obtener 1 registro de la categoria cuyo ID se envia por parametro
    public function get($id){
        $consulta = "SELECT * FROM $this->nombre_tabla where $this->id = ".$id;
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if(!$resultado){
            echo "Error al obtner el elemento con ID";
        }else{
            return $resultado->fetch_all(MYSQLI_ASSOC); //array asociativo : a una tupla o un registro
            $resultado->close();
            $this->db->close();
        }
    }
    //Guardar 1 registro eb la BD
    // $data['cat_nombre'] = "ALGORITMOS"//Input
    // $data['cat_otro'] = "algo"//input
    public function store($data){//array []
        // $consulta = "INSERT INTO $this->nombre_tabla (cat_nombre) values ('".$data['cat_nombre']."');";
        // $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        $resultado = $this->db->prepare("INSERT INTO $this->nombre_tabla (cat_id, usu_id, art_titulo, art_resumen, art_detalle) value (?,?,?,?,?)");
        $resultado->bind_param("iisss", $data['cat_id'], $data['usu_id'], $data['art_titulo'], $data['art_resumen'], $data['art_detalle']);
        if(!$resultado->execute()){
        // if(!$resultado){
            echo "Error al registrar datos";
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
    // Actualizar 1 registro eb la BD
    public function update($id, $data){//array []
        $consulta = "UPDATE $this->nombre_tabla SET cat_nombre = '".$data['cat_nombre']."' WHERE $this->id = ".$id;
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if(!$resultado){
            echo "Error al actualizar datos";
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
    // Borrar 1 registro eb la BD
    public function delete($id){//array []
        $consulta = "DELETE FROM $this->nombre_tabla WHERE $this->id = ".$id;
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if(!$resultado){
            echo "Error al eliminar datos";
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }

}

?>