<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hide and Show</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
		$(document).ready(function(){
		    $("#hide").click(function(){
		        $("p").hide();
		    });
		    $("#show").click(function(){
		        $("p").show("fast");
		    });
		    $("#toggle").click(function(){
	           $("p").toggle(1000);
	        });
		});
	</script>	
	
</head>
<body>

<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="toggle">Toggle</button>

</body>
</html>