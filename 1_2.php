<?php
$number = 345; // Задайте ваше тризначне число

// 1. Сума цифр числа
$sum = array_sum(str_split($number));

// 2. Число в зворотному порядку
$reversed = (int) strrev((string) $number);

// 3. Найбільше число з можливих комбінацій
$digits = str_split($number);
rsort($digits);
$maxNumber = (int) implode('', $digits);

echo "<h2>Операції з тризначним числом</h2>";
echo "<p>Число: <strong>$number</strong></p>";
echo "<p>1) Сума цифр: <strong>$sum</strong></p>";
echo "<p>2) Число в зворотному порядку: <strong>$reversed</strong></p>";
echo "<p>3) Найбільше число: <strong>$maxNumber</strong></p>";
?>