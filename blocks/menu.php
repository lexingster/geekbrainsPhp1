<?php
$menu = [
    'Главная' => 'index.php',
	'Каталог' => 'index.php?st=3',
    'Загрузка' => 'blocks/upload.php',
	'Отзывы' => 'index.php?st=2'
];

echo menu($menu);

function menu($arr)
{
    if (!is_array($arr)) {
        return 'Данные неверны';//введенные данные не массив
    }
    $sMenu[] = '<ul>';
    foreach ($arr as $key => $value) {
        
        $sMenu[] = '<li>' . '<a href =' . $value . '>' . $key . '</a>' . '</li>'; 
       
		} 
           
    $sMenu[] = '</ul>';
    return implode($sMenu);
	
}


?>
