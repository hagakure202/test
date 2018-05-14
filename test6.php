<?php

// Задача
// Даны координаты точки и радиус круга с центром в начале координат. Определить, принадлежит ли данная точка кругу.

echo "Введите координату x: \n";
$x = trim(fgets(STDIN));
echo "Введите координату y: \n";
$y = trim(fgets(STDIN));
echo "Введите радиус r: \n";
$r = trim(fgets(STDIN));
$dist = sqrt ($x * $x + $y * $y);
if ($dist > $r) {
	echo "Точка не принадлежит кругу";
} else {
	echo "Точка принадлежит кругу";
}