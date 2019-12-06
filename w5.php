<?php

echo zamPrb(' /\ /\ '). "<br>";
echo zamPrb('Здесь нет пробелов');


function zamPrb($str)
{
    if (!is_string($str)) {
        return "Введены неверные данные";
    }
    return preg_replace('/\s/', '_', $str); // s - пробельные символы (https://ru.wikipedia.org/wiki/Регулярные_выражения)
	
	
}



?>