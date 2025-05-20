<?php
// Paso 2: Declarar arreglo asociativo
$usuario = [
    "Nombre" => "Ana",
    "Edad" => 21,
    "Email" => "ana@email.com",
    "Carrera" => "Ingeniería Informática"
];

// Paso 3: Mostrar campos con echo
echo "Nombre: " . $usuario["Nombre"] . "<br>";
echo "Edad: " . $usuario["Edad"] . "<br>";
echo "Email: " . $usuario["Email"] . "<br>";
echo "Carrera: " . $usuario["Carrera"] . "<br>";

// Paso 4: Cambiar la edad a 22
$usuario["Edad"] = 22;

// Paso 5: Agregar nuevo campo "activo"
$usuario["activo"] = true;

// Paso 6: Mostrar arreglo completo
echo "<br>Array completo:<br>";
echo "<pre>";
print_r($usuario);
echo "</pre>";
?>
