<?php
$st = $_GET['st'];
?>
<html>
<head>
<title>MyPhoto</title>

</head>
<body>

<table border="1" width="100%" height="100%">
	<tr>
		<td colspan="2" height = "20%" >
		<?php
			include "blocks/header.php";
			?>
		</td>
	</tr>
	<tr>
		<td width=20%>
		<?php 
			include "blocks/menu.php";
			?>
		</td>
		<td width="80%">
		<?php
			if (!isset($st)) {
                include "blocks/content.php";
			}
			if ($st==2) {
				include "blocks/feedback.php";
			}
			if ($st==3) {
				include "blocks/catalog.php";
			}
				
                     ?>
		</td>
	</tr>
	<tr>
	
	<tr>
		<td colspan="2" height="15%">
		
		</td>
	</tr>
		
	
</table>
</body>
</html>
