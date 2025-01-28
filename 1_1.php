<?php
$balance = 10000;
$target = 1000000;
$rate = 0.10;
$years = 0;
$currentAge = 18;

while ($balance < $target) {
    $balance += $balance * $rate;
    $years++;
}

$finalAge = $currentAge + $years;

echo "<h2>Розрахунок накопичення на банківському рахунку</h2>";
echo "<p>Через <strong>$years</strong> років на рахунку буде мільйон гривень.</p>";
echo "<p>Тоді людині буде <strong>$finalAge</strong> років.</p>";

if ($finalAge > 100) {
    echo "<p style='color: red;'>Швидше за все, людина не доживе до цього дня.</p>";
} else {
    echo "<p style='color: green;'>Можливо, людина доживе до цього дня.</p>";
}
?>