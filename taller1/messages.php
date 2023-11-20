<?php

function generar_respuesta_error($errores, $status) {
    $response = [
        "code" => "301",  
        "message" => "Existen errores en los campos del registro",
        "data" => $errores,
        "status" => $status
    ];

    enviar_respuesta_json($response, 400);  // 400 indica un error en la solicitud del cliente
}

function generar_respuesta_exitosa() {
    $response = [
        "code" => "200",  
        "message" => "Registro satisfactorio",
        "data" => [],
        "status" => "USER_INSERT_OK"
    ];

    enviar_respuesta_json($response, 200);  // 200 indica una solicitud exitosa
}

function enviar_respuesta_json($response, $codigo_http) {
    header('Content-Type: application/json');
    http_response_code($codigo_http);
    echo json_encode($response);
    exit;  
}



// Supongamos que hay errores en la validación
$errores = [
    ["identificacion" => "El valor de la identificación no es numérico"],
    ["fecha" => "El campo fecha no tiene el formato AAAA-MM-DD"],
    ["email" => "El campo email no tiene formato de correo electrónico"]
];

// Generar y enviar la respuesta de error
generar_respuesta_error($errores, "USER_INSERT_ERROR");

// En caso de éxito
generar_respuesta_exitosa();
