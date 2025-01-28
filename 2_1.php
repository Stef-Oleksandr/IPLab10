<?php
$array = [1, 2, 3, 4, 5, 3, 2, 6, 7, 2, 8, 9, 3]; // Вихідний масив

// Створюємо асоціативний масив для підрахунку кількості появ кожного елемента
$counts = [];

foreach ($array as $value) {
    if (isset($counts[$value])) {
        $counts[$value]++;
    } else {
        $counts[$value] = 1;
    }
}

// Виведення результатів
echo "<h2 style='color: darkblue;'>Аналіз масиву</h2>";

// Виводимо сам масив
echo "<p><strong>Вихідний масив:</strong> [" . implode(", ", $array) . "]</p>";

// Виведемо повторювані елементи
echo "<h3>Повторювані елементи:</h3>";
echo "<ul style='color: green; font-size: 16px;'>";

$hasDuplicates = false;
foreach ($counts as $key => $count) {
    if ($count > 1) {
        $hasDuplicates = true;
        echo "<li>Елемент <strong style='color: darkred;'>$key</strong> повторюється <strong>$count</strong> разів</li>";
    }
}

if (!$hasDuplicates) {
    echo "<li style='color: gray;'>У масиві немає повторюваних елементів.</li>";
}

echo "</ul>";
?>