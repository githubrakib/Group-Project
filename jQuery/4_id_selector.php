<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	
</head>
<body>
<div class="main">
	<h2>JQuery Practice</h2>
    <script>
    	// If more element are same id then jquery return the match 1st id but not error where javaScript an error
    	$(document).ready(function (){
    		document.getElementById('button').style.backgroundColor = 'blue';
            $('#button').css('background-color', 'red');
        });    
    </script>
	
	<input type="button" id="button" value="click me" />
	<input type="button" id="button" value="click me" />
</div>	
</body>
</html>