<?php

/**
 * Esta función se encarga de consultar a la API todo el listado de personajes disponibles
 * @return string con todo el contenido de la consulta 
 */
function listadoPersonajes(){
    $pathPersonajes = "https://swapi.dev/api/people/";
    $contenido = file_get_contents($pathPersonajes);
    return $contenido;
}

/**
 * Esta función se encarga de consultar a la API la información de un personaje en concreto, en base a su id
 * @param string con el id del personaje en concreto
 * @return string con todo el contenido de la consulta 
 */
function obtenerPersonajes($id){
    $pathPersonajes = "https://swapi.dev/api/people/" . $id . "/";
    $contenido = file_get_contents($pathPersonajes);
    return $contenido;
};

// Se contempla las posibles url que se pueden recibir
$posiblesURL = array("listadoPersonajes","obtenerPersonajes");
$valor = "Ha ocurrido un error";

// En función de la url obtenida, se llama a una función o a otra
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
