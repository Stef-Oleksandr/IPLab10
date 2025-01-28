<?php
echo "<h2>Непарні числа (do-while)</h2>";
echo "<ul style='color: orange;'>";
$i = 1;
do {
    echo "<li>$i</li>";
    $i += 2;
} while ($i <= 50);
echo "</ul>";
?>