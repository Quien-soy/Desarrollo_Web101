<?php
require_once('modelo.php');

//modelo contacto
class Contacto extends Modelo{
    private $id;
    private $nombre_tabla;
    
    /*
    CONSTRUCTOR
    DESCRIPCION: Conecta a la BD 
    */
    public function __construct() {
        parent::__construct();
        $this->id = 'con_id';
        $this->nombre_tabla = 'contacto';
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
    // $data['cat_otro'] = "algo"// input
    public function store($data){//array []
        $consulta = "INSERT INTO $this->nombre_tabla (con_nombre.con_url) values ('".$data['con_nombre.con_url']."');";
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if(!$resultado){
            echo "Error al registrar datos";
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
    // Actualizar 1 registro eb la BD
    public function update($id, $data){//array []
        $consulta = "UPDATE $this->nombre_tabla SET con_nombre.con_url = '".$data['con_nombre.con_url']."' WHERE $this->id = ".$id;
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