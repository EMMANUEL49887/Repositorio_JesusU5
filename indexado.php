<?php
// Declaramos  el arreglo de los colores
$colores = ["Carmesi", "Amarillo", "verde", "Naranja", "Turqueza" , "blanco", "cafe"];

// 2. Mostrar todos los colores usando foreach
echo "Lista de colores:<br>";
foreach ($colores as $color) {
    echo $color . "<br>";
}

// 3. Mostrar el primer y el último color
echo "<br>Primer color: " . $colores[0] . "<br>";
echo "Último color: " . $colores[count($colores) - 1] . "<br>";

// 4. Mostrar cuántos elementos hay en el arreglo
echo "<br>Total de colores: " . count($colores);
?>
