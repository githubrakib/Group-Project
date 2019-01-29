<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>	
</head>
<body>

	<!-- <script type="text/javascript">
		window.onload = function() {
			if (document.addEventListener) {
				document.getElementById('button1').addEventListener('click', clickHandler, false); //Supported all modern browser 
			}
			else
			{
				document.getElementById('button1').attachEvent('onclick', clickHandler); // Supported IE-8 and earliar version
			}			
		};

		function clickHandler()
		{
			alert('jQuery Tutorial');
		}
	</script> -->
	<!-- This is equivalent code of javascript 
         jQuery = $ this is the equivalent 	-->
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery('#button1').click(function (){
                alert('jQuery Tutorial');
			});
		});
		
        /* is equivalent
		$(document).ready(function () {
			$('#button1').click(function (){
              alert('jQuery Tutorial');
			});
		});  */

        /* is equivalent
		$(function () {
			$('#button1').click(function (){
             alert('jQuery Tutorial');
			});
		}); */
	</script>	

    <input type="button" id="button1" value="Click me"/>

</body>
</html>