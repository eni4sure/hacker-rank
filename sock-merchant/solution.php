<?php

function sockMerchant($n, $ar)
{
    $val_count = 0;
    $new_array = [];
    for ($i = 0; $i < 9; $i++) {
        $new_array[$ar[$i]] = 0;
    }

    for ($i = 0; $i < $n; $i++) {
        $new_array[$ar[$i]] = $new_array[$ar[$i]] + 1;
    }

    foreach ($new_array as $value) {
        if (is_int($value / 2)) {
            $val_count = $val_count + $value / 2;
        } elseif (is_int(($value - 1) / 2)) {
            $val_count = $val_count + ($value - 1) / 2;
        } elseif (is_int(($value + 1) / 2)) {
            $val_count = $val_count + ($value + 1) / 2;
        } else {
            continue;
        }
    }

    return $val_count;
}

// My test inputs
$n = 9;
$ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];

sockMerchant($n, $ar);
?>
