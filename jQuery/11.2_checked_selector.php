<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
		$(document).ready(function() {
            $('#btnSubmit').click(function() {
    			var result = $('input[type="checkbox"]:checked');
                if (result.length > 0) {
                    var resultString = result.length + " Checkbox checked <br>";
                    result.each(function() {
                        resultString += $(this).val() + "<br>";
                    });
                    $('#divResult').html(resultString);
                }
                else
                {
                    $('#divResult').html("No Checkbox Checked !!");
                }
            });    
		});
	</script>
</head>
<body>
<div class="main">
    <h2>JQuery Practice</h2>
    Skills :
    <input type="checkbox" name="skills" value="javaScript" >JavaScript
    <input type="checkbox" name="skills" value="jQuery" >JQuery
    <input type="checkbox" name="skills" value="php" >PHP
    <input type="checkbox" name="skills" value="css" >CSS
    <br/><br/>
    
    <input id="btnSubmit" type="submit" name="submit" value="submit">
    <div id="divResult"></div>
</div>    
</body>
</html>