<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
if (empty($_GET["idCandidato"])){
    exit("No hay id de candidato para eliminar");
}

$idCandidato = $_GET["idCandidato"];
$bd = include_once "bd.php";
$sentencia = $bd->prepare("SELECT id, nombre, identificacion, profesion, edad, telefono, correo, perfil, aspiracion, experiencia, nivel, referencias FROM candidatos WHERE id = ?");
$sentencia->execute([$idCandidato]);
$candidato = $sentencia->fetchObjet();
echo json_encode($candidato);
?>