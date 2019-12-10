<?php

function createThumbnail($filename) {
	
	require 'config.php'; //Подключаем файл конфигурации
	
	if(preg_match('/[.](jpg)$/', $filename)) {
		$im = imagecreatefromjpeg($path_to_image_directory . $filename);
	} else if (preg_match('/[.](gif)$/', $filename)) {
		$im = imagecreatefromgif($path_to_image_directory . $filename);
	} else if (preg_match('/[.](png)$/', $filename)) {
		$im = imagecreatefrompng($path_to_image_directory . $filename);
	} //Определяем формат изображения
	
	$ox = imagesx($im);
	$oy = imagesy($im);
	
	$nx = $final_width_of_image;
	$ny = floor($oy * ($final_width_of_image / $ox));
	
	$nm = imagecreatetruecolor($nx, $ny);
	
	imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy);
	
	if(!file_exists($path_to_thumbs_directory)) {
	  if(!mkdir($path_to_thumbs_directory)) {
           die("Возникли проблемы! попробуйте снова!");
	  } 
       }

	imagejpeg($nm, $path_to_thumbs_directory . $filename);
	$tn = '<img src="' . $path_to_thumbs_directory . $filename . '" alt="image" />';
	$tn .= 'Файл загружен<br />';
	echo $tn;
}//Сжимаем изображение, если есть оишибки, то говорим о них, если их нет, то выводим получившуюся миниатюру


?>