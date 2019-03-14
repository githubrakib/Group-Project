<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			//$('.small, .big').css('border', '5px solid blue');
			$('.small, p.big').css('border', '5px solid blue');
			//$('.small, span.big').css('border', '5px solid blue');
		});
	</script>
	
</head>
<body>
<div class="main">
   <h2>JQuery Practice</h2>
   <span class="small">
   	    span 1
   </span>
   <br/><br/>
   <div class="small">
   	    div 1
   </div>
   <br>
   <span class="big">
   	    span 2
   </span>
   <p class="big">This is paragraph</p>
</div>   
</body>
</html>