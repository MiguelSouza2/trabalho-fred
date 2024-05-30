<?php


if (isset($_POST["name"]) && $_POST["universe"] && $_POST["cont"]) {
    $name = trim(strtolower($_POST["name"]));
    $universe = trim(strtolower($_POST["universe"]));
    $cont = $_POST["cont"];

}


for ($x = 0; $x < $cont; $x++) {

    if ($universe == 'marvel') {
        if ($name == 'wolverine' || $name == 'hulk' || $name == 'noturno' || $name == 'thor' || $name == 'mercurio') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                <img src='img/" . $name . ".jpg'>
             ";
        } elseif ($name == 'homem de ferro') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br>
                <img src='img/homem-de-ferro.jpg'>
            ";
        } elseif ($name == 'capitão américa') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                <img src='img/capitao-america.jpg'>
            ";
        } elseif ($name == 'doutor estranho') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                <img src='img/doutor-estranho.webp'>
            ";
        } elseif ($name == 'homem aranha') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                <img src='img/homem-aranha.jpg'>
            ";
        }
    } elseif ($universe == 'dc') {
        if ($name == 'superman' || $name == 'batman' || $name == 'flash' || $name == 'supergirl' || $name == 'aquaman') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                    <img src='img/" . $name . ".jpg'>
                 ";
        } elseif ($name == 'mulher maravilha') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br>
                    <img src='img/mulher-maravilha.webp'>
                ";
        } elseif ($name == 'lanterna verde') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                    <img src='img/lanterna-verde.jpg'>
                ";
        } elseif ($name == 'besouro azul') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                    <img src='img/besouro-azul.jpg'>
                ";
        } elseif ($name == 'arqueiro verde') {
            echo "<br>Universo: " . $universe . " nome: " . $name . " <br> 
                    <img src='img/arqueiro-verde.jpg'>
                ";
        }
    }

}

