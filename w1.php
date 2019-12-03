<?php
$a = 5;
$b = -11;

if ($a >= 0 && $b >= 0) {
	echo $a-$b;
}
if ($a < 0 && $b < 0) {
	echo $a-$b;
}
if ($a < 0 && $b > 0 || $a > 0 && $b < 0) {
	echo $a*$b;
}


?>