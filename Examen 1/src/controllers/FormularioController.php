<?php

function mostrarFormulario($request, $response, $container) {
    $response->setTemplate("formulario.php");
    return $response;
}

function procesar($request, $response, $container) {
    // Obtener datos del formulario
    $nombre = $request->get(INPUT_POST, "nombre");
    $email = $request->get(INPUT_POST, "email");
    $edad = $request->get(INPUT_POST, "edad");
    $pais = $request->get(INPUT_POST, "pais");
    $comentarios = $request->get(INPUT_POST, "comentarios");

    // Pasar datos a la vista
    $response->set("nombre", $nombre);
    $response->set("email", $email);
    $response->set("edad", $edad);
    $response->set("pais", $pais);
    $response->set("comentarios", $comentarios);

    $response->setTemplate("resultado.php");
    return $response;
} 