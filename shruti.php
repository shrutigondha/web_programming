<html>
<head>
	<link rel='stylesheet' href='form3.css' type='text/css'>
<body text="black">
<table align="center" cellpadding="5" cellspacing="0" bgcolor="#E7DEDC" >
<form action="form2.php" method="get">
<th colspan="2"><h1>Registration Form</h1></th>
</tr>
<tr><td>Username:</td><td><input type="text" size="12" name="username"></td></tr>
<tr><td>Passwrod:</td><td><input type="text" size="12" name="password"></td><tr>
<tr><td>Name:</td><td><input type="text" size="37" name="name"></td></tr>
<tr><td>Address:</td><td><input type="text" size="37" name="address"></td></tr>
		<tr><td><label>Country</td><td></label>
		<select name="country" >
		<option>Please select country</option>
		<option value="Afghanistan">Afghanistan</option>
		<option value="Bangladesh">Bangladesh</option>
		<option value="Canada">Canada</option>
		<option value="Denmark">Denmark</option>
		</select>
		</td></tr>
<tr><td>ZIP Code:</td><td><input type="text" size="12" name="zip_code"></td></tr>

<tr><td>Email:</td><td><input type="text" size="37" name="email"></td></tr>

<tr><td>Sex:</td><td>
<input type="radio" name="sex" value="Male" checked><span>Male</span></td>							
<td><input type="radio" name="sex" value="Female"><span>Female</span></td></tr>
	   
<tr><td>Language:</td>
<td><input type="checkbox" name="language" value="English" checked><span>English</span>
<input type="checkbox" name="language" value="Non-English"><span>Non-English</span></td></tr>

<tr><td>About:</td>
<td><textarea type="text" name="about"></textarea></td></tr>

<tr><td><input type="submit" name="submit"></td></tr>
</table>
</head>
</form>
</body>
</html>

