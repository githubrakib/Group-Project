<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
		$(document).ready(function() {
            $('#selectCountries').change(function(){
                var selectedOption = $('#selectCountries option:selected');
                $('#divResults').html('Value = ' + selectedOption.val() + ',Text = ' + selectedOption.text());
            }); 
		});
	</script>
</head>
<body>
<div class="main">
    <h2>JQuery Practice</h2>    
    Country : 
    <select id="selectCountries">
        <option value="USA">United States</option>
        <option value="UK">United Kingdom</option>
        <option value="IND">India</option>
        <option value="CA">Canada</option>
        <option value="Au">Australia</option>
    </select>
    <br/>
    <br/>
    <div id="divResults"></div>
</div>    
</body>
</html>