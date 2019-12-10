<?php
$menu = [
    'Главная' => 'index.php',
    'Загрузка' => 'blocks/upload.php'
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
