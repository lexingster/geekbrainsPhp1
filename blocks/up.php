<?php 

require 'config.php'; //Подключаем файл конфигурации
require 'process.php'; //Подключаем файл-обработчик


for($i=0;$i<count($_FILES['fupload']['name']);$i++){
	if(isset($_FILES['fupload'])) {
	
	if(preg_match('/[.](jpg)|(gif)|(png)$/', //Ставим допустимые форматы изображений для загрузки
	 $_FILES['fupload']['name'][$i])) {
		
		$filename = $_FILES['fupload']['name'][$i];
	    $source = $_FILES['fupload']['tmp_name'][$i];	
		$target = $path_to_image_directory . $filename;
		
		move_uploaded_file($source, $target);
		
		createThumbnail($filename);		
	}
}
}
?>

