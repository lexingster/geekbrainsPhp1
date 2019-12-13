<?php

if (isset($_REQUEST['id'])) {
	$dt = $_REQUEST['id'];
	$dv = $_REQUEST['v'];
	
	$dv++;
	include "admin/config.php";
	$sql = "update photo set view=$dv where id=$dt";
if(mysqli_query($connect,$sql)){
    
	
		$sql = "select * from photo where id = $dt";
		$res = mysqli_query($connect,$sql);
		while($data = mysqli_fetch_assoc($res)){
			echo "<img  src='" .$data['path'] .$data['title']. "'>";
		}
	
}
	

} else {

		include "admin/config.php";
		$sql = "select * from photo ORDER BY view DESC";
		$res = mysqli_query($connect,$sql);
		while($data = mysqli_fetch_assoc($res)){
			echo "<a href = index.php?id=" .$data['id']. "&v=".$data['view']."><img  src='" .$data['m_path'] .$data['title']. "'></a> Просмотров".$data['view'];
}
}
?>
