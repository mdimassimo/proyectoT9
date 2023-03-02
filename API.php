<?php

function listadoPersonajes(){
    $pathPersonajes = "https://swapi.dev/api/people/";
    $contenido = file_get_contents($pathPersonajes);
    return $contenido;
}

function obtenerPersonajes($id){
    $pathPersonajes = "https://swapi.dev/api/people/" . $id . "/";
    $contenido = file_get_contents($pathPersonajes);
    return $contenido;
};

$posiblesURL = array("listadoPersonajes","obtenerPersonajes");
$valor = "Ha ocurrido un error";

if (isset($_GET["ordered"]) && in_array($_GET["ordered"], $posiblesURL)){
    switch($_GET["ordered"]){
        case "listadoPersonajes":
            $valor = listadoPersonajes();
            break;
        case "obtenerPersonajes":
            if(isset($_GET["id"])){
                $valor = obtenerPersonajes($_GET["id"]);                
            } else {
                $valor = "Id de personaje no válido";
            }
            break;
    } 
    exit($valor);
}
?>
