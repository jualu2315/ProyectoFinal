<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
$bd = include_once "bd.php";
$sentencia = $bd->query("SELECT id, nombre, identificacion, profesion, edad, telefono, correo, perfil, aspiracion, experiencia, nivel, referencias FROM candidatos");
$candidato = $sentencia->fetchAll(PDO::FETCH_OBJ);
echo json_encode($candidato);
?>