<?php
include "admin/config.php";

if($_GET['prod']) {
	$id = intval($_GET['prod']);
		$result = mysqli_query($connect, "SELECT * FROM prod WHERE id=$id");
		$prod = mysqli_fetch_assoc($result);
?>
    <a href="index.php?st=3">Вернуться в каталог</a>
	   
        <p><img src="<?=IMG_CAT.$prod['image']?>" /></p>
<?php
           echo "<h3>".$prod['name']."</h3><p>Цена: ".$prod['price']."</p><p>".$prod['description']."</p>";
			
	} else {
		$products = mysqli_query($connect, "SELECT * FROM prod");
		while ($prod = mysqli_fetch_assoc($products)) {
			echo "<div class='product'><img src='" . IMG_CAT . "mini/" . $prod['image'] . "'>
		<span>Цена: <b>" . $prod['price'] . "</b></span>
		<a class='name' href='index.php?st=3&prod=" . $prod['id'] . "'>" . $prod['name'] . "</a><br></div>\n";
		}
	}
	
?>
