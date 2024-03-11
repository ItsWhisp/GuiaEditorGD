<?php

/**
 * ARCHIVO DE CONFIGURACION DE CONEXION A LA BASE DE DATOS
 * AQUI YACEN LAS VARIABLES DE CONEXION A LA BASE DE DATOS, FAVOR DE NUNCA EXPONER LOS
 * DATOS REALES DEL SERVIDOR EN LINEA EN EL REPOSITORIO, DE LO CONTRARIO
 * PUEDE SER PELIGROSO CUALQUIER ACCESO NO AUTORIZADO A LA DB
 * NOTA: CAMBIAR LOS DATOS DE HOST, DATABASE, USER Y PASSWORD A LOS REALES DEL SERVIDOR
 * MYSQL EN EL ARCHIVO LOCAL DE SU SERVIDOR MYSQL
 */

$host = "localhost";
$database = "guia";
$user = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  // foreach ($conn->query("SHOW DATABASES") as $row) {
  //   print_r($row);
  // }
  // die();
} catch (PDOException $e) {
  die("PDO Connection Error: " . $e->getMessage());
}