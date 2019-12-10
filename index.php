<html>
<head>
<title>MyPhoto</title>

<script type="text/javascript">

// open modal
var wrap = $('#wrapper'),
     btn = $('.open-modal-btn'),
     modal = $('.cover, .modal, .content');

btn.on('click', function() {
  modal.fadeIn();
});

// close modal
$('.modal').click(function() {
  wrap.on('click', function(event) {
    var select = $('.content');
    if ($(event.target).closest(select).length)
      return;
    modal.fadeOut();
    wrap.unbind('click');
  });
});
</script







</head>
<body>

<table border="1" wight = 100% height = 100%>
	<tr>
		<td colspan=2 height = 20 % >
		<?php
			include "blocks/header.php";
			?>
		</td>
	</tr>
	<tr>
		<td wight =20%>
		<?php 
			include "blocks/menu.php";
			?>
		</td>
		<td wight 80%>
		<?php
                        include "blocks/content.php";
                     ?>
		</td>
	</tr>
	<tr>
	
	<tr>
		<td colspan =2 height = 15%>
		
		</td>
	</tr>
		
	
</table>
</body>
</html>
