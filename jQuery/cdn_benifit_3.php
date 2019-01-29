<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<!-- <script src="../includes/jquery.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- at first cdn load if when cdn does not connet then load jquery own server --> 
    <script>
    	window.jQuery || document.write('<script src="../includes/jquery.js"><\/script>');
    </script>
</head>
<body>
	<script>
		$(document).ready(function () {
			$('#button').click(function (){
              alert('jQuery Tutorial');
			});
		});		
	</script>

    <input type="button" id="button" value="Click me"/>
</body>
</html>