<?php  
class RetirarDineroDelCajero {
    private $cajero =  "8523 Guapi";
    private $numeroDocumento;
    private $documento = [
        '252423' => 'Maria',
        '10075658' => 'Pepito Perez'
    ];

    public function __construct($identificacion){
        foreach ($this->documento as $key => $value) {
            if ($identificacion == $key) {
                $this->nameSession = $value;
                $this->numeroDocumento = $key;
                echo "Bienvenida $value a tu cajero de retiro <br><br>";
            }
        }
    }

    public function __destruct(){
        echo "Destuyendo la sesión de $this->nameSession <br>";
        echo "Sesión cerrada exitosamente";
    }

    public function __call($metodo, $parametros){
        $mensaje = "Método inaccesible: -> $metodo, Parámetros -> ";
        foreach ($parametros as $parametro) {
            $mensaje .= "$parametro ' ";
        }
        echo "$mensaje <br>";
    }

    public function __set($propiedad, $valor){
        return $this->$propiedad = $valor;
    }

    public function __get($propiedad){
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }
    
}

$cliente = new RetirarDineroDelCajero('10075658');
$cliente->tarjetaDeCredito(544455, "46544-5436-5484-558");
echo "<br><br>";
$cliente->numeroDocumento = 2547896;
echo "Acabas de ingresar con el documento No.$cliente->numeroDocumento <br>";
$cliente->nameSession = "Anónimo";
echo "<br><br>";
echo "Nombre del usuario: $cliente->nameSession";
echo "<br><br>";

?>