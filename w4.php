<?php
$operation ="вычитаие"; // доступные действия - сложение, вычитание, умножение, деление
$arg1 = 35;
$arg2 = 12;

echo mathOperation($arg1, $arg2, $operation);
//здесь не совсем понятно почему все работает без return??


//основная функция
function mathOperation($arg1, $arg2, $operation){
	switch ($operation){
		case "сложение":
			echo "Выбрано действие $operation, проверка работы функции $arg1 + $arg2 =". sum($arg1, $arg2);
			//return $sum();
			break;
		case "вычитание":
			echo "Выбрано действие $operation, проверка работы функции $arg1 - $arg2 =". diff($arg1, $arg2);
			break;
		case "умножение":
			echo "Выбрано действие $operation, проверка работы функции $arg1 * $arg2 =". multi($arg1, $arg2);
			break;
		case "деление":
			echo "Выбрано действие $operation, проверка работы функции $arg1 / $arg2 =". div($arg1, $arg2);
			break;
		default:
			echo "Неверно выбрано действие";
	}
	
	 
}

//Функции 

//сложение
function sum($arg1, $arg2) {
	$sum = $arg1 + $arg2;
	return $sum;
}

//Вычитание 
function diff($arg1, $arg2) {
	$dif = $arg1 - $arg2;
	return $dif;
}

//умножение
function multi($arg1, $arg2) {
	$multi = $arg1 * $arg2;
	return $multi;
}

//деление
function div($arg1, $arg2) {
	$div = $arg1 / $arg2;
	return $div;
}

?>