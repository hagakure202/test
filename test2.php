<?php
echo "Введите одно четное и одно нечетное числа \n";
echo "Первое число: ";
$num1 = trim(fgets(STDIN));
echo "Второе число: ";
$num2 = trim(fgets(STDIN));
	if ($num1 % 2 == 0) {
		echo "$num2 - четное число";
	} else {
		echo "$num1 - нечетное число";
	}

