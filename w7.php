<?php
$hour = date("H");
$min = date("i");

echo timeTo($hour, $min);

//функция 
function timeTo($hour, $min) {
	//часы
	if ($hour == 0  || $hour >=5 && $hour <= 20 ) {
		$sh ="Часов"; 
	}
	if ($hour == 1 || $hour == 21) {
		$sh = "Час";
	}
	if ($hour >= 2 && $hour <= 4 || $hour >= 22 && $hour <= 23) {
	$sh = "Часа";
	}
	//минуты
	if ($min == 0 || $min >= 5 && $min <= 20 || $min >= 25 && $min <= 30 || $min >= 35 && $min <= 40 || $min >= 45 && $min <= 50 || $min >= 55 && $min <= 59){
		$sm = "Минут";
	}
	 if ($min == 1 || $min == 21 || $min == 31 || $min == 41 || $min == 51 ) {
		$sm = "Минута";
	}
	if ($min >= 2 && $min <= 4 || $min >= 22 && $min <= 24 || $min >= 32 && $min <= 34 || $min >= 42 && $min <= 44 || $min >= 52 && $min <= 54) {
		$sm = "Минуты";
	}
	
	return "Текущее время $hour $sh  $min $sm";
	
}

?>