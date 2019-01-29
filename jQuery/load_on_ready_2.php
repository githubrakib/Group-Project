<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script type="text/javascript">
		// at 1st window loaded then document loaded
		$(window).on('load', function (){  // jQuery version 3 on applicable
            alert('Window Loaded');
		});
        // jQuery version 2 on applicable
		// $(window).load( function (){
        //           alert('Window Loaded');
		// });

		$(document).ready(function (){
            alert('Document Loaded');
		});
	</script>	
</head>
<body>

	
</body>
</html>