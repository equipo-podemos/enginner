<?php
require('Conexion.php');
class Plantillas extends Conexion{

    // PROPIEDADES

    private $nombre;
    private $forma;
    private $color;
    private $conexion;

    // CONSTRUCTOR

    public function __construct($servidor, $usuario, $password, $basededatos){



$this->conexion = new \mysqli($servidor, $usuario, $password, $basededatos);


}

    // METODOS



    public function CSSCirculo() {


        // $inputBoton = $_POST[''];

        // if(isset($inputBoton)) {

        echo(' <style>');

        echo('
        
        .menu{
            background: #F85656;
        }
        
        .menu a{
            color: white;
        }
        
        h1{
            color: #C44141;
        }
        
        h2{
            color: white;
        }
        
        
        .linea{
            background: white;
        }
        
        .caja1{
            background: #F85656;
        }
        
        .caja2{
            background: #C44141;
        }
        
        .caja3{
            background: #F85656;
        }
        
        h4{
            color: white;
        }
        
        .texto{
            color: white;
        }
        
        .caja1 button ,.caja2 button, .caja3 button{
            background: white;
            color: #C44141;
            border: none;
            border-radius: 20px;
        }
        
        
        .caja1,.caja2,.caja3{
            height: 430px;
            width: 400px;
            border-radius: 50%;
            }
            
        ');
            echo(' </style>');



    // }


    }

    public function CSSRedondeado() {

        $inputBoton = $_POST[''];

        if(isset($inputBoton)) {

        echo('   <style>
        
        
        .menu{
            background: #86914C;
        }
        .menu a{
            color: #E6E6E6;
        }
        h1{
            color: #4C6291;
        }
        h2{
            color: #707070;
        }
        .linea{
            background: #4C6291;
        }
        .caja1{
            background: #F3F7E4;
        }
        .caja2{
            background: #EFF8C7;
        }
        .caja3{
            background: #F1F7AB;
        }
        h4{
            color: #7B853C;
        }
        .texto{
            color: #707070;
        }
        .caja1 button ,.caja2 button, .caja3 button{
            background: #7B853C;
            color: #FFFFFF;
            border: none;
            border-radius: 20px ;
        }
        .caja1,.caja2,.caja3{
            height: 500px;
            width: 350px;
            border-radius: 20px;
            }
            
            
            </style>');



    }



    }

    public function CSSCuadrado() {

        $inputBoton = $_POST[''];

        if(isset($inputBoton)) {

        echo('   <style>
        
        
        .menu{
            background: #4C6291;
        }
        .menu a{
            color: #E6E6E6;
        }
        h1{
            color: #4C6291;
        }
        .linea{
            background: #4C6291;
        }
        .caja1{
            background: #E4EAF7;
        }
        .caja2{
            background: #C7D7F8;
        }
        .caja3{
            background: #ABC3F7;
        }
        h4{
            color: #FFFFFF;
        }
        .texto{
            color: #707070;
        }
        .caja1 button ,.caja2 button, .caja3 button{
            background: #7F8DAA;
            color: #FFFFFF;
            border: none;
        }
        .caja1,.caja2,.caja3{
            height: 500px;
            width: 350px;
            }
            
            
            </style>');



    }

}





// public function plantillaUno($nombretabla) {

//     // OTRA FORMA: Si usamos esta opcion, tenemos que poner el parametro de verTuplas(), $AtributosyDatos para que aplique el implode
//             // $atributos = implode(", " , array_keys($AtributosyDatos));
    
         
//             // $leer = $this->conexion->query("select $atributos from $nombretabla");
    
//             // FORMA ACTUAL
    
//             $plantilla1 = $this->conexion->query("select * from $nombretabla");
    
//     // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
    
//     echo('<pre>');
//     print_r($plantilla1);
//     echo('</pre>');
    
  
//     foreach($plantilla1 AS $valor) {

//         $atributoNombre = $valor['nombre'];

//         if(($nombretabla == 'plantilla') && ($atributoNombre == 'cuadrado')){


    

//             echo('<!DOCTYPE html>');
//             echo('<html lang="en">');
//             echo('<head>');
//                 echo('<meta charset="UTF-8">');
//                 echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
//                 echo('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
//                 echo('<title>Document</title>');
//                 echo('<style>');
//                 $style = $this-> CSSUno();
//                 echo($style);
//                 echo('</style>');
//             echo('</head>');


// echo('<body>');

// echo('<nav>');
// echo('<div class="menu">');
// echo('<img src="_assets/img/desktop/icon.svg" alt="">');
// echo('<div class="links">');
// echo('<a href="">Primera opcion</a>');
// echo('<a href="">Segunda opcion</a>');
// echo('<a href="">Tercera opcion</a>');
// echo('</div>');
// echo('</div>');
// echo('</nav>');
// echo('<header>');
// echo('<div class="linea"></div>');
// echo('<h1>NEGOCIO</h1>');

// echo('<div class="linea"></div>');
// echo('</header>');
// echo('<section>');
// echo('<div class="caja1">');
// echo('<h2>PRIMERA OPCION</h2>');
// echo('<h4>Free</h4>');
// echo('<div class="texto"></div>');
// echo('<button>COMPRAR</button>');
// echo('</div>');
// echo('<div class="caja2">');
// echo('<h2>PRIMERA OPCION</h2>');
// echo('<h4>FREE</h4>');
// echo('<div class="texto"></div>');
// echo('<button>COMPRAR</button>');
// echo('</div>');
// echo('<div class="caja3">');
//     echo('<h2>PRIMERA OPCION</h2>');
//     echo('<h4>FREE</h4>');
//     echo('<div class="texto"></div>');
//     echo('<button>COMPRAR</button>');
// echo('</div>');

// echo('</section>');



//         }
    
       
//     }
    
    
//         }




//         public function plantillaDos($nombretabla) {

//             // OTRA FORMA: Si usamos esta opcion, tenemos que poner el parametro de verTuplas(), $AtributosyDatos para que aplique el implode
//                     // $atributos = implode(", " , array_keys($AtributosyDatos));
            
                 
//                     // $leer = $this->conexion->query("select $atributos from $nombretabla");
            
//                     // FORMA ACTUAL
            
//                     $plantilla2 = $this->conexion->query("select * from $nombretabla");
            
//             // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
            
//             echo('<pre>');
//             print_r($plantilla2);
//             echo('</pre>');
            
          
//             foreach($plantilla2 AS $valor) {
        
//                 $atributoNombre = $valor['nombre'];
        
//                 if(($nombretabla == 'plantilla') && ($atributoNombre == 'circulo')){
        
        
            
      
//                     echo('<!DOCTYPE html>');
//                     echo('<html lang="en">');
//                     echo('<head>');
//                         echo('<meta charset="UTF-8">');
//                         echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
//                         echo('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
//                         echo('<title>Document</title>');
//                         echo('<style>');
//                         $style = $this-> CSSDos();
//                         echo($style);
//                         echo('</style>');
//                     echo('</head>');
        
        
//         echo('<body>');

// echo('<nav>');
// echo('<div class="menu">');
//     echo('<img src="_assets/img/desktop/icon.svg" alt="">');
//     echo('<div class="links">');
//     echo('<a href="">Primera opcion</a>');
//     echo('<a href="">Segunda opcion</a>');
//     echo('<a href="">Tercera opcion</a>');
// echo('</div>');
// echo('</div>');
// echo('</nav>');
// echo('<header>');
// echo('<div class="linea"></div>');
// echo('<h1>NEGOCIO</h1>');

// echo('<div class="linea"></div>');
// echo('</header>');
// echo('<section>');
// echo('<div class="caja1">');
//     echo('<h2>PRIMERA OPCION</h2>');
//     echo('<h4>Free</h4>');
//     echo('<div class="texto"></div>');
//     echo('<button>COMPRAR</button>');
// echo('</div>');
// echo('<div class="caja2">');
//         echo('<h2>PRIMERA OPCION</h2>');
//         echo('<h4>FREE</h4>');
//         echo('<div class="texto"></div>');
//         echo('<button>COMPRAR</button>');
//     echo('</div>');
//     echo('<div class="caja3">');
//             echo('<h2>PRIMERA OPCION</h2>');
//             echo('<h4>FREE</h4>');
//             echo('<div class="texto"></div>');
//             echo('<button>COMPRAR</button>');
//         echo('</div>');
    
// echo('</section>');
        
        
        
//                 }
            
               
//             }
            
            
//                 }

//                 public function plantillaTres($nombretabla) {

//                     // OTRA FORMA: Si usamos esta opcion, tenemos que poner el parametro de verTuplas(), $AtributosyDatos para que aplique el implode
//                             // $atributos = implode(", " , array_keys($AtributosyDatos));
                    
                         
//                             // $leer = $this->conexion->query("select $atributos from $nombretabla");
                    
//                             // FORMA ACTUAL
                    
//                             $plantilla3 = $this->conexion->query("select * from $nombretabla");
                    
//                     // CREAMO SUN FOREACH PARA QUE $resultados, para uqe nos muestre los datos de la base de datos, en este caso dentro de [nosmbre de atributo].
                    
//                     echo('<pre>');
//                     print_r($plantilla3);
//                     echo('</pre>');
                    
                    
//                     foreach($plantilla3 AS $valor) {
                
//                         $atributoNombre = $valor['nombre'];
                
//                         if(($nombretabla == 'plantilla') && ($atributoNombre == 'redondeado')){
                
                
//                             echo('<!DOCTYPE html>');
//                             echo('<html lang="en">');
//                             echo('<head>');
//                                 echo('<meta charset="UTF-8">');
//                                 echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
//                                 echo('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
//                                 echo('<title>Document</title>');
//                                 echo('<style>');
//                                 $style = $this-> CSSTres();
//                                 echo($style);
//                                 echo('</style>');
//                             echo('</head>');
                
                
//                 echo('<body>');
 
//     echo('<nav>');
//         echo('<div class="menu">');
//             echo('<img src="_assets/img/desktop/icon.svg" alt="">');
//             echo('<div class="links">');
//             echo('<a href="">Primera opcion</a>');
//             echo('<a href="">Segunda opcion</a>');
//             echo('<a href="">Tercera opcion</a>');
//         echo('</div>');
//         echo('</div>');
//     echo('</nav>');
//     echo('<header>');
//         echo('<div class="linea"></div>');
//         echo('<h1>NEGOCIO</h1>');
     
//         echo('<div class="linea"></div>');
//     echo('</header>');
//     echo('<section>');
//         echo('<div class="caja1">');
//             echo('<h2>PRIMERA OPCION</h2>');
//             echo('<h4>Free</h4>');
//             echo('<div class="texto"></div>');
//             echo('<button>COMPRAR</button>');
//         echo('</div>');
//         echo('<div class="caja2">');
//                 echo('<h2>PRIMERA OPCION</h2>');
//                 echo('<h4>FREE</h4>');
//                 echo('<div class="texto"></div>');
//                 echo('<button>COMPRAR</button>');
//             echo('</div>');
//             echo('<div class="caja3">');
//                     echo('<h2>PRIMERA OPCION</h2>');
//                     echo('<h4>FREE</h4>');
//                     echo('<div class="texto"></div>');
//                     echo('<button>COMPRAR</button>');
//                 echo('</div>');
            
//     echo('</section>');
                
//                         }
                    
                       
//                     }

//                 }


                       
                        
                        
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