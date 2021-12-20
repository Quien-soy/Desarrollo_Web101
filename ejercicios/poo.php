<?php

class Coche{
    private $marca;
    public $color;
    public static $modelo = "Furgoneta";

    public function __construct($mar, $col){
        $this->marca = $mar;
        $this->color = $col;
    }

    public function set_marca($m){
        $this->marca  = $m;
    }

    public function get_marca(){
        return $this->marca;
    }

    public static function acelerar(){
        echo "<h3>Acelerendo coche</h3>";
    }
}

echo "<h2>Instancia de la clase coche</h1>";
$a = new Coche('Toyota', 'Rojo');
echo $a->get_marca()."<br>";
echo $a->color."<br>";
echo Coche::$modelo."<br>";
Coche::acelerar();
?>