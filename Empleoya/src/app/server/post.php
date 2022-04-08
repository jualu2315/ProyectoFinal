<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Headers: *");
$jsonCandidato = json_decode(file_get_contents("php://input"));
if ($jsonCandidato){
    exit("No hay datos");
}
$bd = include_once "bd.php";
$sentencia = $bd->prepare("INSERT INTO candidatos (nombredelcandidato, identificacion, profesion, edad, telefono, correo, perfildetalladodelcandidato, aspiracionsalarial, experiencialaboral, niveleducativo, referencias) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?));
$resultado = $sentencia->execute([$jsonCandidato->nombredelcandidato, $jsonCandidato->identificacion, $jsonCandidato->profesion, $jsonCandidato->edad, $jsonCandidato->telefono, $jsonCandidato->correo, $jsonCandidato->perfildetalladodelcandidato, $jsonCandidato->aspiracionsalarial, $jsonCandidato->experiencialaboral, $jsonCandidato->niveleducativo, $jsonCandidato->referencias]);
echo json_encode([
    "resultado"->$resultado,
    ]);
?>