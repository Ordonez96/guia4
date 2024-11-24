<?php
/**
 * Ordena una lista de números de forma descendente utilizando el algoritmo Bubble Sort.
 * Maneja duplicados y valores negativos.
 */


// Lista inicial
$numbers = [3, -2, 5, 3, -8, 7, 1, 0, -5];
echo PHP_EOL . "Lista original: " . implode(", ", $numbers) . PHP_EOL;

// Llamada a la función de ordenamiento
bubbleSortDescending($numbers);

echo "Lista ordenada (descendente): " . implode(", ", $numbers) . PHP_EOL;

/**
 * Ordena una lista de números de forma descendente utilizando Bubble Sort.
 *
 * @param array &$arr La lista de números a ordenar (por referencia).
 */
function bubbleSortDescending(array &$arr): void {
    $n = count($arr); // Número de elementos en la lista

    // Iterar por cada elemento de la lista
    for ($i = 0; $i < $n - 1; $i++) {
        // Comparar pares consecutivos
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar si están en el orden incorrecto
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}
?>
