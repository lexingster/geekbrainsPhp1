<?php
function sum($a, $b) {
    return $a + $b;
}
function sub($a, $b) {
    return $a - $b;
}
function multi($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    if ($b == 0) return "Ошибка деления на ноль";
    return $a / $b;
}
function math($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            return sum($arg1, $arg2);
        case "-":
            return subtract($arg1, $arg2);
        case "*":
            return multi($arg1, $arg2);
        case "/":
            return div($arg1, $arg2);
        default:
            return false;
    }
}