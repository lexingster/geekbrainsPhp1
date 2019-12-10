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
	<?php /*
	
	<div id="wrapper">
  <div class="cover"></div>
  <div class="modal">
    <div class="content">
      <p>THIS IS CONTENT</p>
      <form onsubmit="return false">
        <input type="text" placeholder="test">
        <input type="submit" />
      </form>
    </div>
  </div>

  <div class="cnt">
    <button class="open-modal-btn">OPEN MODAL</button>
  </div>
</div>
*/
?>

