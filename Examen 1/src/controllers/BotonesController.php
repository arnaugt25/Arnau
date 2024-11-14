<?php

function mostrarBotones($request, $response, $container) {
    $response->setTemplate("botones.php");
    return $response;
} 