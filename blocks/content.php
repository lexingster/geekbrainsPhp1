<?php
$files = scandir("image");

//print_r ($files);
$i = 1;

foreach($files as $file){
				
	//убираем первые 2 элемента
	if ($file == '.' || $file == '..'){
	} else {
		// делим картинки на 3 столбца
	if ($i % 3 == 0) {
	echo "<a href = \"image/$file\"><img  src='mimage/$file'></a></br>";
	} else {
		
	 echo "<a href = \"image/$file\"><img  src='mimage/$file'></a>";
	}
	$i++;
	} 
	
}
	
	
	?>
	
