<?php 
//Siempre las propiedades son PRIVADAS, se acceden a traves de los metodos que si pueden ser publicos.
class Persona{
    private $dni;
    private $nombre;
    private $edad;
    private $nacionalidad;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br><br>";
    }

}

class Alumno extends Persona{        //Extends define la herencia
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


    public function __construct()
    {
        $this->notaPortfolio=0.0;
        $this->notaPhp=0.0;
        $this->notaProyecto=0.0;
    }
    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Legajo: " . $this->legajo . "<br>";
        echo "Nota Portfolio: " . $this->notaPortfolio . "<br>";
        echo "Nota Php: " . $this->notaPhp . "<br>";
        echo "Nota Proyecto: " . $this->notaProyecto . "<br>";
        echo "Promedio: " . number_format($this->calcularPromedio(),2,",") . "<br><br>"; 

    }
    public function calcularPromedio(){
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto) / 3;
    }
}

class Docente extends Persona{
    private $especialidad;
    const ESPECIALIDAD_ECO ="Economía aplicada";
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_BBDD = "Base de datos";

    
        public function __get($propiedad) {
            return $this->$propiedad;
        }

        public function __set($propiedad, $valor) {
            $this->$propiedad = $valor;
        }

    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br><br>";
    }
    public function imprimirEspecialidadesHabilitadas(){
        echo "Las especialidades habilitadas son: <br>";
        echo self::ESPECIALIDAD_ECO . "<br>";
        echo self::ESPECIALIDAD_WP . "<br>";
        echo self::ESPECIALIDAD_BBDD . "<br>";
        
    }
}



//Programa



$alumno1 = new Alumno();
$alumno1->nombre = "Julia Lopez";
$alumno1->dni = "38979977";
$alumno1->nacionalidad = "Argentina";
$alumno1->legajo = 7898;
$alumno1->notaPhp = 8.5;
$alumno1->notaPortfolio = 7.5;
$alumno1->notaProyecto = 8;
$alumno1->imprimir();
$alumno1->calcularPromedio();


$alumno2 = new Alumno();
$alumno2->nombre = "Matías Diaz";
$alumno2->nacionalidad = "Colombiano";
$alumno2->notaPortfolio = 9;
$alumno2->notaPhp = 9;
$alumno2    ->notaProyecto = 8;
$alumno2->imprimir();
$alumno2->calcularPromedio();


$docente1 = new Docente();
$docente1->nombre = "Juan Carlos Rosales";
$docente1->especialidad = Docente::ESPECIALIDAD_BBDD;
$docente1->imprimir();
$docente1->imprimirEspecialidadesHabilitadas();
