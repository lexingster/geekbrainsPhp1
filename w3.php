<?php
//переменные
$a = 14;
$b = 6;

//Функции

//сложение

function sum($a, $b) {
	$sum = $a + $b;
	return $sum;
}

//Вычитание 

function diff($a, $b) {
	$dif = $a - $b;
	return $dif;
}

//умножение

function multi($a, $b) {
	$multi = $a * $b;
	return $multi;
}

//деление

function div($a, $b) {
	$div = $a / $b;
	return $div;
}
//проверка

echo "Проверка функции сложения $a + $b = " .sum($a, $b)."<br>";
echo "Проверка функции вычитания $a - $b = " .diff($a, $b)."<br>";
echo "Проверка функции умножения $a * $b = " .multi($a, $b)."<br>";
echo "Проверка функции деления $a / $b = " .div($a, $b)."<br>";
	

?>