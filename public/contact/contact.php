<?php

require './PHPMailer.php';
require './SMTP.php';

$req =  trim(strtolower($_SERVER['HTTP_X_REQUESTED_WITH']));
$method = trim(strtolower($_SERVER['REQUEST_METHOD']));

if (!isset($req) || !($req === 'xmlhttprequest') || !($method === 'post')) {
    header('Content-type: application/json');
    http_response_code(400);
    
    $response = json_encode([
        'code' => 2,
        'message' => 'Bad Request'
    ]);
    die($response);
}

$data = json_decode(file_get_contents('php://input'));

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet = 'utf-8';


$mail->Host = 'host';
$mail->Username = 'correo';
$mail->Password = 'password';

$mail->From = 'correo';
$mail->FromName = $data->name;
$mail->AddAddress('a donde');
$mail->AddReplyTo('respuesta a');

$mail->Subject = 'Nueva Consulta';

// Html Format
$message = '<h1>Tienes una nueva consulta</h1>';
foreach ($data as $field => $value) {
    $message .= '<p>' . $field . ': ' . $value . '</p>';
}
$mail->Body = $message;

$message = 'Tienes una nueva consulta\n\n';
foreach ($data as $field => $value) {
    $message .= $field . ': ' . $value . '\n\n';
}
$mail->AltBody = $message;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$send = $mail->Send();

header('Content-type: application/json');

if ($mail->Send()) {
    http_response_code(200);
    $response = json_encode([
        'code' => 1,
        'message' => 'El correo se envio correctamente'
    ]);
    die($response);
}

http_response_code(400);
$response = json_encode([
    'code' => 2,
    'message' => 'El email no pudo ser enviado, intenta de nuevo mas tarde'
]);
die($response);
