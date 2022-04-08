<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: *");

if ($_SERVER[REQUEST_METOHD] != "PUT"){
    exit("Solo acepta peticiones PUT");
}
$jsonCandidato = json_decode(file_get_contents("php://input"));
if($jsonCandidato){
    exit("No hay datos");
}
$bd = include_once "bd.php";
$sentencia = $bd->prepare("UPDATE candidatos SET nombre = ?, identificacion = ?, profesion = ?, edad = ?, telefono = ?, correo = ?, perfil = ?, aspiracion = ?, experiencia = ?, nivel = ?, referencias = ? WHERE id=?);
$resultado = $sentencia->execute([$jsonCandidato->nombre, $jsonCandidato->identificacion, $jsonCandidato->profesion, $jsonCandidato->edad, $jsonCandidato->telefono, $jsonCandidato->correo, $jsonCandidato->perfil, $jsonCandidato->aspiracion, $jsonCandidato->experiencia, $jsonCandidato->nivel, $jsonCandidato->referencias, $jsonCandidato->id]);
echo json_encode($resultado);
?>