<?php
require_once('Conexion.php');

class Imprimir extends Conexion{


private $opciones;
private $link;
private $titulo;
private $oferta;
private $contenido;
private $precio;

public function __construct($servidor, $usuario, $password, $basededatos){



    $this->conexion = new \mysqli($servidor, $usuario, $password, $basededatos);
    
    
    }



    public function CambiarTitulo($nombretabla, $inputTitulo) {

        $cambiarTexto = $this->conexion->query("select * from $nombretabla");

        // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
        
        echo('<pre>');
        print_r($cambiarTexto);
        echo('</pre>');
        
        
        foreach($cambiarTexto AS $valor) {

       
            if($nombretabla == 'texto') {

            $this->titulo = $inputTitulo;

            // poner el query para introducir en la BD

            echo $this->titulo;
            }

    }
}