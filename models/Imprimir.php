<?php

require_once('Conexion.php');
class Imprimir extends Conexion{

    private $oferta1;
    private $oferta2;
    private $oferta3;

       // CONSTRUCTOR

       public function __construct($servidor, $usuario, $password, $basededatos){



        $this->conexion = new \mysqli($servidor, $usuario, $password, $basededatos);
        
        
        }


        public function CambiarLogo() {



        }


        public function CambiarTituloLogo($nombretabla) {

            $tablaTexto = $this->conexion->query("select * from $nombretabla;");

            foreach($tablaTexto AS $key => $valor) {
            
            // condicional nombreTabla sea propiedades
            if($nombretabla == 'texto') {

                $inputTituloLogo = $_POST['tituloLogo'];

                $this->conexion->query(" update $nombretabla set nombre = $inputTituloLogo WHERE id_texto = 1;");


$mostrarTituloLogo = $this->conexion->query("select * from $nombretabla;");


foreach($mostrarTituloLogo AS $key => $valor) {

    echo $valor['nombre'];

        }

    }


}


}

        public function CambiarTitulo() {

            $tablaTexto = $this->conexion->query("select * from $nombretabla;");

            foreach($tablaTexto AS $key => $valor) {
            
            // condicional nombreTabla sea propiedades
            if($nombretabla == 'texto') {

                $inputTitulo = $_POST['titulo'];

                $this->conexion->query(" update $nombretabla set titulo = $inputTitulo WHERE id_texto = 1;");


$mostrarTitulo = $this->conexion->query("select * from $nombretabla;");


foreach($mostrarTitulo AS $key => $valor) {

    echo $valor['titulo'];

        }

    }


}




}

        public function CambiarOpciones() {

        }

        public function CambiarPrecio() {

        }

        public function CambiarPropiedades($nombretabla, $id_oferta) {

 

           // RECORDATORIO(Antes de que se me olivde): Crearemos dos tablas con los mismo aitrubtos y estructura, pero una va a ser para
          // mostrar el contenido que la persona introdujo en los inputs, esto con el UPDATE, y otra tabla para registrar todas las ofertas
          // que nos introduzcan en los inputs pero para esto ya con INSERT INTO
          // y simplemente seria hacer un mostrarPropiedad() = CambiarPropiedades() y un registrarOfertas(). 



// FOREACH de la tabla propiedades
$MostrarPropiedades = $this->conexion->query("select * from $nombretabla;");

foreach($MostrarPropiedades AS $key => $valor) {

// condicional nombreTabla sea propiedades
if($nombretabla == 'propiedades') {

// igualo la propiedad e oferta con el valor del atributo id_oferta

$this->oferta1 = $valor['id_oferta'];

// Condicional de que la oferta sea igual a 1 o a la colmna de oferta que queremos introducir las propiedades

if($this->oferta1 == '1') {

// Bucle con for, para poder tener todos los $_POSt de los inputs de las propiedades que nos llegan

for($i = 0; $i < 10; $i++) {

$inputsPropiedades = $_POST['propiedad' . $i];

// hacemos un query para la tabla propiedades en donde lo que queremos es que se actualicen las propiedades
// segun la columna de ofertas que sean, en este caso 1.
// esto lo hacemos porque queremos que se actualicen las propiedades cuando la persona quiera hacer una nueva plantilla.


$this->conexion->query(" update Propiedades set propiedad = $inputsPropiedades WHERE id_oferta = 1;");



// En un array poenmos llave-valor, en donde la llave = Atributo propiedad de la tabla Propiedades, mientras que 
// el valor son los inputs ed las propiedades que nos llegan con $_POST.
// usaremos este array para introducir datos en la tabla, para que nos registren las ofertas que nos hacen estas personas al momento de hacer la plantilla

$arrayInputsPropiedades = [

'propiedad' => $inputsPropiedades
];

// REalizamos el query para introducir datos en la tabla

$atributos = implode(", " , array_keys($arrayInputsPropiedades));
 

$i = 0;
foreach($arrayInputsPropiedades as $key=>$valor) {



$dato[$i] = "'" . $valor . "'";
  $i++;
  
}


$datos = implode(", ", $dato);


$this->conexion->query(" insert into registroPropiedades ($atributos) VALUES ($datos);");

// y finalmente con el array tambien realizamos un foreach para imprimir los inputs de las propiedades que nos enviaron las personas


foreach($arrayInputsPropiedades AS $valor) {

echo $valor;
}
}



}

        }

    }


}

        public function CambiarBotones() {

        }

        public function CambiarNav() {

        }


}

?>