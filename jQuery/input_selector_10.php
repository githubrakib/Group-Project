<!DOCTYPE html>
<html lang="en">
<head>
	<title>jQuery html</title>
	<link rel="stylesheet" type="text/css" href="../includes/jsstyle.css">
	<script src="../includes/jquery.js"></script>
	<script>
		$(document).ready(function() {
			/*$(":input").each(function() { // all input return
                alert($(this).val());
            });*/
            /*
            $(":input[type='text']").each(function() { // all input type text return
                alert($(this).val());
            }); */
            $("input").each(function() { // scrap dropdown and textarea
                alert($(this).val());
            });
		});
	</script>
</head>
<body>
    <form>
        First name:<br>
        <input type="text" name="firstname" value="Rakib">
        <br>
        Last name:<br>
        <input type="text" name="lastname" value="Hasan">
        <br/><br/>
        Gender :
        <input type="radio" name="gender" value="Male" checked="checked">Male
        <input type="radio" name="gender" value="Female">Female
        <br/><br/>
        Skills :
        <input type="checkbox" name="skills" value="javaScript" checked="checked">JavaScript
        <input type="checkbox" name="skills" value="jQuery" checked="checked">JQuery
        <br/><br/>
        Cars :
        <select name="cars">
            <option selected="selected" value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
        </select>
        <br><br>
        Summary : 
        <br>
        <textarea>This is a text area</textarea>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>