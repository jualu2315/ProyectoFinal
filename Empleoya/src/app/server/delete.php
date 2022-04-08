<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Methods: DELETE");
$metodo = $_SERVER["REQUEST_METHOD"];
if ($metodo != "DELETE" && $metodo != "OPTIONS"){
    exit("Solo se puede metodo DELETE");
}
if (empty($_GET["idCandidato"])){
    exit("No hay id de candidato para eliminar");
}

$idCandidato = $_GET["idCandidato"];
$bd = include_once "bd.php";
$sentencia = $bd->prepare("DELETE FROM candidatos WHERE id = ?");
$resultado = $sentencia->execute([$idCandidato]);
echo json_encode($resultado);
?>