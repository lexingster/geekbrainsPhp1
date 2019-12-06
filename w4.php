<?php

$text="тестируем. перевод? букв,";

echo ruToEng($text);

function ruToEng($text){

//Массив с буквами
$ruEn = ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'zh','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r',
'с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'kh','ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'sch','ъ'=>'*','ы'=>'y','ь'=>'#','э'=>'e','ю'=>'yu','я'=>'ya'];

//объявлем массив для вывода

$newArr = [];

//Создаем массив из введенного текста
$string = preg_split('//u', $text, 0, PREG_SPLIT_NO_EMPTY);

for ($i = 0; $i < count($string); $i++) {
        foreach ($ruEn as $key => $value) {
            //добавляем в новый массив совпавшие символы
            if ($string[$i] == $key) {
                array_push($newArr, $value);
                break;
                //добавляем запятые и пробелы 
            } elseif (preg_match('/[[:punct:]]|\s/', $string[$i])) {
                array_push($newArr, $string[$i]);
                break;
            }
        }
    }


	return implode($newArr);

}




?>