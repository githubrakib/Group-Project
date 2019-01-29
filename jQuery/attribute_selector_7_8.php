<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
		$(document).ready(function() {
			//$('[title]').css('border', '5px solid blue'); // all title attribute selected
			//$('div[title]').css('border', '5px solid blue'); // all div title attribute selected
			//$('[title="divtitle1"]').css('border', '5px solid blue'); // specific div title attribute selected 
			//$('div[title][style]').css('border', '5px solid blue'); // multiple attribute selected and this is the and condition
			//$('p[title],[style]').css('border', '5px solid blue'); // this is the or condition
			//$('p[title!="ptitle1"]').css('border', '5px solid blue'); // select p not value ptitle1
			// or
			$('p:not([title="ptitle1"])').css('border', '5px solid blue'); // same as previous
		});
	</script>
	
</head>
<body>
    <div title="divtitle1">
    	div1
    </div>
    <div title="divtitle2">
    	div2
    </div>
    <p title="ptitle1">
    	p1
    </p>
    <p title="ptitle2">
    	p2
    </p>
    <span title="spantitle">
    	span
    </span>
    <div title="divtitle3" style="background-color: green;">
    	div3
    </div>
</body>
</html>