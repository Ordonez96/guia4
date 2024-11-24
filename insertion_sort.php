<?php
/**
 * Ordena una lista de nombres en orden alfabético utilizando el algoritmo Insertion Sort.
 */

// Lista inicial
$names = ["Carlos", "Maria" , "Pedro", "Lucia", "Javier" , "Ana", "Beatriz", "Francisco", "Elena", "Luis"];
echo  PHP_EOL . "Lista original: " . implode(", ", $names) . PHP_EOL;

// Llamada a la función de ordenamiento
insertionSort($names);

echo "Lista ordenada (alfabéticamente): " . implode(", ", $names) . PHP_EOL;

/**
 * Ordena una lista alfabéticamente utilizando el algoritmo Insertion Sort.
 *
 * @param array &$arr La lista de nombres a ordenar (por referencia).
 */
function insertionSort(array &$arr): void {
    $n = count($arr);

    // Iterar desde el segundo elemento hasta el final
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i]; // Elemento actual
        $j = $i - 1;

        // Mover elementos mayores que key una posición a la derecha
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }

        // Colocar key en su posición correcta
        $arr[$j + 1] = $key;
    }
}
?>
