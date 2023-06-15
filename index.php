<?php

function isPandigital($number) {
    $digits = str_split($number);
    sort($digits);
    $concatenated = implode('', $digits);
    return $concatenated === '123456789';
}

$pandigitalProducts = [];

for ($a = 1; $a < 10000; $a++) {
    for ($b = $a + 1; $b < 10000; $b++) {
        $product = $a * $b;
        $concatenatedNumber = $a . $b . $product;
        
        if (strlen($concatenatedNumber) > 9) {
            break; // If the concatenated number exceeds 9 digits, move to the next value of $a.
        }
        
        if (isPandigital($concatenatedNumber)) {
            $pandigitalProducts[$product] = true;
        }
    }
}

$pandigitalSum = array_sum(array_keys($pandigitalProducts));
echo $pandigitalSum;

?>