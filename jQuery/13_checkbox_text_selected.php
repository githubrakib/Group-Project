<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
		$(document).ready(function() {
            $('input[name="skills"]').click(function() {
                getCheckedCheckBoxes('skills');
            });
            $('input[name="cities"]').click(function() {
                getCheckedCheckBoxes('cities');
            });
            var getCheckedCheckBoxes = function(groupName){
                var result = $('input[name="'+groupName+'"]:checked');
                if (result.length > 0) {
                    var resultString = result.length + " Checkbox checked <br>";
                    result.each(function() {
                        var selectedValue = $(this).val();
                        resultString += selectedValue + "-" + $('label[for="cb-' + selectedValue + '"]').text() + "<br>";
                    });
                    $('#div'+groupName).html(resultString);
                }
                else
                {
                    $('#div'+groupName).html("No Checkbox Checked !!");
                }
            };       
		});
	</script>
</head>
<body>
<div class="main">
    <h2>JQuery Practice</h2>    
    Skills :
        <input type="checkbox" name="skills" value="js" />
        <label for="cb-js">JavaScript</label>
        <input type="checkbox" name="skills" value="jq" >
        <label for="cb-jq">JQuery</label>
        <input type="checkbox" name="skills" value="php" >
        <label for="cb-php">PHP</label>
        <input type="checkbox" name="skills" value="css" >
        <label for="cb-css">CSS</label>
        <br/><br/>
    Cities :
        <input type="checkbox" name="cities" value="ny" > 
        <label for="cb-ny">New York</label> 
        <input type="checkbox" name="cities" value="ln" > 
        <label for="cb-ln">London</label> 
        <input type="checkbox" name="cities" value="md" > 
        <label for="cb-md">Madrid</label> 
        <br/><br/>
    
    <div id="divskills"></div>
    <br/>
    <div id="divcities"></div>
</div>    
</body>
</html>