<?php
require_once('Conexion.php');
class Plantillas extends Conexion{

    // PROPIEDADES

    private $nombre;
    private $forma;
    private $color;

    // CONSTRUCTOR

    public function __construct($servidor, $usuario, $password, $basededatos){



$this->conexion = new \mysqli($servidor, $usuario, $password, $basededatos);


}

    // METODOS

    public function CSSgenerico() {


    }


public function plantillaUno($nombretabla) {

    // OTRA FORMA: Si usamos esta opcion, tenemos que poner el parametro de verTuplas(), $AtributosyDatos para que aplique el implode
            // $atributos = implode(", " , array_keys($AtributosyDatos));
    
         
            // $leer = $this->conexion->query("select $atributos from $nombretabla");
    
            // FORMA ACTUAL
    
            $plantilla1 = $this->conexion->query("select * from $nombretabla");
    
    // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
    
    echo('<pre>');
    print_r($plantilla1);
    echo('</pre>');
    
  
    foreach($plantilla1 AS $valor) {

        $atributoNombre = $valor['nombre'];

        if(($nombretabla == 'plantilla') && ($atributoNombre == 'cuadrado')){


    
$this-> CSSgenerico();



        }
    
       
    }
    
    
        }




        public function plantillaDos($nombretabla) {

            // OTRA FORMA: Si usamos esta opcion, tenemos que poner el parametro de verTuplas(), $AtributosyDatos para que aplique el implode
                    // $atributos = implode(", " , array_keys($AtributosyDatos));
            
                 
                    // $leer = $this->conexion->query("select $atributos from $nombretabla");
            
                    // FORMA ACTUAL
            
                    $plantilla2 = $this->conexion->query("select * from $nombretabla");
            
            // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
            
            echo('<pre>');
            print_r($plantilla2);
            echo('</pre>');
            
          
            foreach($plantilla2 AS $valor) {
        
                $atributoNombre = $valor['nombre'];
        
                if(($nombretabla == 'plantilla') && ($atributoNombre == 'circulo')){
        
        
            
        $this-> CSSgenerico();
        
        
        
                }
            
               
            }
            
            
                }

                public function plantillaTres($nombretabla) {

                    // OTRA FORMA: Si usamos esta opcion, tenemos que poner el parametro de verTuplas(), $AtributosyDatos para que aplique el implode
                            // $atributos = implode(", " , array_keys($AtributosyDatos));
                    
                         
                            // $leer = $this->conexion->query("select $atributos from $nombretabla");
                    
                            // FORMA ACTUAL
                    
                            $plantilla3 = $this->conexion->query("select * from $nombretabla");
                    
                    // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
                    
                    echo('<pre>');
                    print_r($plantilla3);
                    echo('</pre>');
                    
                    
                    foreach($plantilla3 AS $valor) {
                
                        $atributoNombre = $valor['nombre'];
                
                        if(($nombretabla == 'plantilla') && ($atributoNombre == 'redondeado')){
                
                
                    
                $this-> CSSgenerico();
                
                
                
                        }
                    
                       
                    }
                    
                    
                        }


                        public function CambiarTexto() {



                        }
                        
                        
//                         public function Propiedades($nombretabla) {


//                             $propiedades = $this->conexion->query("select * from $nombretabla");
                    
//                     // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
                    
//                     echo('<pre>');
//                     print_r($propiedades);
//                     echo('</pre>');
                    
                 
//                     foreach($propiedades AS $valor) {

//                         if($nombretabla ==)
//                         }


}

?>