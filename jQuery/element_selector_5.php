<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
	<script>
		$(document).ready(function() {
			//alert($('td').length); //length is 9

			//alert($('table').html()); // alert the html content of the table

			/*
			$('table tr').each(function() {
                alert($(this).html());  // alerts the html content each table row
			}); */

			$('div, span, a').css('background-color', 'red');
            $('tr:even').css('background-color', 'grey');
            $('tr:odd').css('background-color', 'yellow');
		});
	</script>
</head>
<body>
    <table style="width:50%; margin: auto;">
        <tr>
		    <th>Firstname</th>
		    <th>Lastname</th> 
		    <th>Age</th>
        </tr>
		<tr>
		    <td>Jill</td>
		    <td>Smith</td>
		    <td>50</td>
		</tr>
		<tr>
		    <td>Eve</td>
		    <td>Jackson</td>
		    <td>94</td>
		</tr>
		<tr>
		    <td>John</td>
		    <td>Doe</td>
		    <td>80</td>
		</tr>
	</table>

	<div>Div1</div>	
	<br>		
	<div>Div2</div>
	<br><br>
	<a href="#">hellow</a><br/><br>
	<span>Span</span>			
	
</body>
</html>