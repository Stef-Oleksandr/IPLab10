<?php
// Вбудовані функції
function calculate_sin($x) {
    return sin($x);
}

function calculate_cos($x) {
    return cos($x);
}

// Власна реалізація функції tg (у випадку, якщо cos(x) = 0, tg(x) не визначений)
function my_tg($x) {
    if (cos($x) == 0) {
        return "Не визначено (cos(x) = 0)";
    }
    return sin($x) / cos($x);
}

// Функція для обчислення x^y
function calculate_power($x, $y) {
    return pow($x, $y);
}

// Функція для обчислення факторіала числа
function factorial($x) {
    if ($x < 0) {
        return "Не визначено (x < 0)";
    }
    if ($x == 0 || $x == 1) {
        return 1;
    }
    $result = 1;
    for ($i = 2; $i <= $x; $i++) {
        $result *= $i;
    }
    return $result;
}
?>