<html>
<head>
	<b><center>Registration Form</center></b>
<body>
<table>
<form action="form2.php" method="get">
<tr><td>Username:</td><td><input type="text" name="username"></td></tr>
<tr><td>Passwrod:</td><td><input type="text" name="password"></td><tr>
<tr><td>Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Address:</td><td><input type="text" name="address"></td></tr>
		<tr><td><label>Country</td><td></label>
		<select name="country" >
		<option>Please select country</option>
		<option value="Afghanistan">Afghanistan</option>
		<option value="Bangladesh">Bangladesh</option>
		<option value="Canada">Canada</option>
		<option value="Denmark">Denmark</option>
		</select>
		</td></tr>
<tr><td>Zip_code:</td><td><input type="text" name="zip_code"></td></tr>
<tr><td>Email:</td><td><input type="text" name="email"></td></tr>
<tr><td>Sex:</td><td><input type="radio" name="sex" value="Male"><label>Male</label>
	<input type="radio" name="sex" value="Female"><label>Female</label></td></tr>
<tr><td>Language:</td><td><input type="checkbox" name="language" value="English"><label>English</label>
		<input type="checkbox" name="language" value="Non-English"><label>Non-English</td></tr>
<tr><td>About:</td><td><textarea type="text" name="about"></textarea></td></tr>
<tr><td><input type="submit" name="submit"></td></tr>
</table>
</head>
</form>
</body>
</html>
