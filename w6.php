<?php

$menu = [
    'Главная',
    'Каталог' => ['Категория 1', 'Категория 2', 'Категория 3'],
    'О компании' => ['Руководство' => ['Директор', 'Подразделения']]
];

echo menu($menu);

function menu($arr)
{
    if (!is_array($arr)) {
        return 'Данные неверны';//введенные данные не массив
    }
    $sMenu[] = '<ul>';
    foreach ($arr as $key => $value) {
        
        if (is_array($value)) {
            $sMenu[] = '<li>' . $key . menu($value) . '</li>'; // вызываем функцию для чтения подменю
        } else {
            $sMenu[] = '<li>' . $value . '</li>';
        }
    }
    $sMenu[] = '</ul>';
    return implode($sMenu);
}


?>