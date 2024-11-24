<?php
/**
 * Ordena una lista de palabras alfabéticamente utilizando el algoritmo Merge Sort.
 */

// Lista inicial
$words = ["banana", "apple", "Watermelon", "orange", "strawberry", "pineapple", "peach", "blueberry", "grape", "kiwi", "lemon"];
echo PHP_EOL . "Lista original: " . implode(", ", $words) . PHP_EOL;

// Llamada a la función de ordenamiento
$sortedWords = mergeSort($words);

echo "Lista ordenada (alfabéticamente): " . implode(", ", $sortedWords) . PHP_EOL;

/**
 * Ordena una lista alfabéticamente utilizando el algoritmo Merge Sort.
 *
 * @param array $arr La lista de palabras a ordenar.
 * @return array La lista ordenada.
 */
function mergeSort(array $arr): array {
    if (count($arr) <= 1) {
        return $arr; // Caso base: listas de tamaño 0 o 1 ya están ordenadas
    }

    // Dividir la lista en mitades
    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    // Ordenar recursivamente ambas mitades
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combinar las mitades ordenadas
    return merge($left, $right);
}

/**
 * Combina dos listas ordenadas en una sola lista ordenada.
 *
 * @param array $left La primera mitad ordenada.
 * @param array $right La segunda mitad ordenada.
 * @return array La lista combinada y ordenada. 
 */
function merge(array $left, array $right): array {
    $result = [];
    $i = $j = 0;

    // Combinar mientras haya elementos en ambas mitades
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i++];
        } else {
            $result[] = $right[$j++];
        }
    }

    // Agregar elementos restantes de ambas mitades
    return array_merge($result, array_slice($left, $i), array_slice($right, $j));
}
?>
