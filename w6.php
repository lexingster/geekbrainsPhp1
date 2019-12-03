<?php
$val = 10; //заданное число
$pow = 3; //степень

echo "Проверка работы функции возведения в степень. Число - $val, степень - $pow, результат = ". power($val, $pow);

//Функция
function power($val, $pow){
	if ($pow == 1){
		return $val;
	} else {
		return $val * power($val, $pow - 1);
	}
	
}

?>