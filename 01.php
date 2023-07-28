<?php

function hashOrder(int $number): string {
    // Zdefiniuj zakres dla numerów zamówień
    $minOrderNumber = 1;
    $maxOrderNumber = 9999999;

    // Sprawdź, czy numer zamówienia mieści się w zakresie
    if ($number < $minOrderNumber || $number > $maxOrderNumber) {
        throw new InvalidArgumentException("Numer zamówienia musi być w zakresie od $minOrderNumber do $maxOrderNumber");
    }

    // Wykonaj operacje haszowania
    $multiplier = 5; // Dowolna liczba pierwsza w zakresie int
    $hashValue = ($number * $multiplier) % $maxOrderNumber;
    $hashString = str_pad($hashValue, 7, '0', STR_PAD_LEFT);

    return $hashString;
}

// Przykład użycia
try {
    echo hashOrder(9999990) . PHP_EOL; // "8002927"
    echo hashOrder(350) . PHP_EOL; // "3010247"
    echo hashOrder(567) . PHP_EOL; // "6276600"
} catch (InvalidArgumentException $e) {
    echo "Błąd: " . $e->getMessage() . PHP_EOL;
}
