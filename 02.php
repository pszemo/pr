<?php

function findUniqueString(string $s): int {
    $charCount = [];

    // Przechodzimy przez ciąg, aby zliczyć wystąpienia każdego znaku
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        if (!isset($charCount[$char])) {
            $charCount[$char] = 1;
        } else {
            $charCount[$char]++;
        }
    }

    // Przechodzimy przez ciąg, aby znaleźć pierwszy unikalny znak
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        if ($charCount[$char] === 1) {
            // Zwracamy indeks (zaczynający się od 1) pierwszego unikalnego znaku
            return $i + 1;
        }
    }

    // Jeśli nie ma unikalnych znaków, zwracamy -1
    return -1;
}

// no to siup
echo findUniqueString('przemek'); // Wyświetli: 3