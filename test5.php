<?php
echo "Введите год: \n";
$year = trim(fgets(STDIN));
if ($year % 4 == 0) {
	if ($year % 100 == 0 & $year % 400 <> 0) {
		echo "В этом году 365 дней";
	} else {
		echo "В этом году 366 дней";
	}
} else {
		echo "В этом году 365 дней";
}