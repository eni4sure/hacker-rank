<?php

$n = 8;
$s = ['U', 'D', 'D', 'D', 'U', 'D', 'U', 'U'];

function countingValleys($n, $s)
{
    $entered_count = 0;

    $current_position = 0;
    for ($i = 0; $i < $n; $i++) {
        $check = false;

        if ($s[$i] == 'U') {
            $current_position++;
        }

        if ($s[$i] == 'D') {
            $check = true;
        }

        if ($check) {
            $current_position--;
            if ($current_position == -2) {
                if ($previous_position == -1) {
                    $current_position--;
                    $entered_count++;
                }
            }
        }

        $previous_position = $current_position;
    }

    return $entered_count;
}
?>
