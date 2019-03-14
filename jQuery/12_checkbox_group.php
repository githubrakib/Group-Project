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
                        resultString += $(this).val() + "<br>";
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
        <input type="checkbox" name="skills" value="javaScript" >JavaScript
        <input type="checkbox" name="skills" value="jQuery" >JQuery
        <input type="checkbox" name="skills" value="php" >PHP
        <input type="checkbox" name="skills" value="css" >CSS
        <br/><br/>
    Cities :
        <input type="checkbox" name="cities" value="New York" >New York  
        <input type="checkbox" name="cities" value="London" >London  
        <input type="checkbox" name="cities" value="Madrid" >Madrid  
        <br/><br/>
    <!-- <input id="btnSelectedSkills" type="submit" name="btnSelectedSkills" value="Get Selected Skills">
    <input id="btnSelectedCities" type="submit" name="btnSelectedCities" value="Get Selected Cities">
    <br/><br/> -->
    <div id="divskills"></div>
    <br/>
    <div id="divcities"></div>
</div>    
</body>
</html>