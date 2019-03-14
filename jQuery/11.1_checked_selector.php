<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
		$(document).ready(function() {
            $('#btnSubmit').click(function() {
    			var result = $('input[type="radio"]:checked');
                if (result.length > 0) {
                    $('#divResult').html(result.val() + " is checked");
                }
                else
                {
                    $('#divResult').html("No Radio Button Checked !!");
                }
            });    
		});
	</script>
</head>
<body>
<div class="main">
    <h2>JQuery Practice</h2>    
    Gender :
    <input type="radio" name="gender" value="Male" >Male
    <input type="radio" name="gender" value="Female">Female
    <br/><br/>
    
    <input id="btnSubmit" type="submit" name="submit" value="submit">
    <div id="divResult"></div>
</div>    
</body>
</html>