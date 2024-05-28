<?php

if (isset($_POST["name"]) && $_POST["universe"] && $_POST["cont"]){
    $name = trim(strtolower($_POST["name"]));
    $universe = trim(strtolower($_POST["universe"]));
    $cont = $_POST["cont"];
    
}

if ($universe == 'marvel'){
    if($name == 'homem de ferro' || $name == 'hulk' || $name == 'capitão américa' || $name == 'thor' || $name == 'homem aranha'){
         echo "Universo: " . $universe . " nome: " . $name . " \n 
            <img src='img/" . $name . "'>
         ";
        
    }
}