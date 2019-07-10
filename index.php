<?php

require_once('models/Plantillas.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

  <?php
$css = new Plantillas('localhost', 'root', '', 'plantilla');

$css->CSSCirculo();

  ?>
</head>
<body>
    <nav>
        <div class="menu">
            <div class="imagen_titulo">
            <img src="_assets/img/desktop/icon.svg" alt="">
            <h5>GHOST enginner</h5>
        </div>
            <div class="links">
                <a href="">Primera opcion</a>
                <a href="">Segunda opcion</a>
                <a href="">Tercera opcion</a>
            </div>
        </div>
    </nav>
    <header>
        <div class="linea"></div>
        <h1>NEGOCIO</h1>
        <div class="linea"></div>
    </header>
    <section>
        <div class="caja1">
            <h2>PRIMERA OPCION</h2>
            <h4>Free</h4>
            <div class="texto">
                    <p>hola</p>
                    <p>hola</p>
                    <p>hola</p>
            </div>
            <button>COMPRAR</button>
        </div>
        <div class="caja2">
            <h2>PRIMERA OPCION</h2>
            <h4>FREE</h4>
            <div class="texto">
                    <p>hola</p>
                    <p>hola</p>
                    <p>hola</p>
            </div>
            <button>COMPRAR</button>
        </div>
        <div class="caja3">
            <h2>PRIMERA OPCION</h2>
            <h4>FREE</h4>
            <div class="texto">
                <p>hola</p>
                <p>hola</p>
                <p>hola</p>
            </div>
            <button>COMPRAR</button>
        </div>
    </section>
</body>
</html>