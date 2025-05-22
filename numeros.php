<?php
// 1. Crear un arreglo indexado con 15 valores aleatorios
$misNumeros = array();
for ($i = 0; $i < 15; $i++) {
    $misNumeros[] = rand(0, 9); // para que luzca más como el ejemplo (números pequeños)
}

// 2. Mostrar el contenido y resultados en formato consola
echo "<pre>"; // mantiene el formato visual tipo consola

// Mostrar el arreglo
echo "Arreglo: [";
for ($i = 0; $i < count($misNumeros); $i++) {
    echo $misNumeros[$i];
    if ($i < count($misNumeros) - 1) echo ", ";
}
echo "]\n";

// Funciones de suma
function suma_total(array $numeros): int {
    return array_sum($numeros);
}

function suma_pares(array $numeros): int {
    $suma = 0;
    for ($i = 0; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}

function suma_impares(array $numeros): int {
    $suma = 0;
    for ($i = 1; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}

// Mostrar resultados
echo "Suma total: " . suma_total($misNumeros) . "\n";
echo "Suma en índices pares: " . suma_pares($misNumeros) . "\n";
echo "Suma en índices impares: " . suma_impares($misNumeros) . "\n";

echo "</pre>";
?>
