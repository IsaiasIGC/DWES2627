<?php

include_once("Persona.php");
include_once("Alumno.php");
include_once("Recurso.php");
include_once("Libro.php");
include_once("Software.php");

$persona = new Persona("Isaias", 21);
$alumno = new Alumno("Jeremias", 19, "Artes escénicas");
$libro = new Libro("Alicia en el país de las maravillas");
$software = new Software("123X", "Call of Duty");

echo $persona;
echo $alumno;
echo $libro->mostrarTipo();

$software->Titulo = "Call of Duty: Black Ops";
echo $software;
echo $software->Cod;

?>