<?php
function buscarElemento($arreglo, $elemento) {
    foreach ($arreglo as $indice => $valor) {
        if ($valor === $elemento) {
            return $indice;
        }
    }
    return -1; 
}

function ordenacionBurbuja($arreglo) {
    $n = count($arreglo);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arreglo[$j] > $arreglo[$j + 1]) {
                $temp = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $temp;
            }
        }
    }
    return $arreglo;
}
$arreglo = [64, 25, 12, 22, 11];
$elementoBuscado = 12;
$posicion = buscarElemento($arreglo, $elementoBuscado);

if ($posicion !== -1) {
    echo "Se encontrado en la posición $posicion.\n";

    $arregloOrdenado = ordenacionBurbuja($arreglo);

    echo "Arreglo por ordenacion por Burbuja: " . implode(", ", $arregloOrdenado) . "\n";
} else {
    echo "Elemento no encontrado.\n";
}
?>

<!-- //Aquí se intenta realizar una busqueda y un ordenamiento por burbuja. Utilice un bucle foreach
//para recojer el arreglo y comparar cada elemnto es igual al buscado 
//se esta realizando la busqueda de un elemento en especifico de un arreglo de numeros. -->