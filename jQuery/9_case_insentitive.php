<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
	    $(document).ready(function() {
			$('div[title]').filter(function(){
				return $(this).attr('title').toLowerCase() == 'divtitle';
			}).css('border', '3px solid red');
		});
	</script>
</head>
<body>
<div class="main">
    <h2>JQuery Practice</h2>
    <div title="DivTitle">
   	    DIV 1
    </div>
    <br/>
    <div title="DIVTITLE">
   	    DIV 2
    </div>
    <br/>
    <div title="divtitle">
   	    DIV 3
    </div>
</div>    
</body>
</html>