<html>
<head>
	<link rel='stylesheet' href='shruti3.css' type='text/css'>
<body text="black">
<table align="center" cellpadding="5" cellspacing="0" bgcolor="#E7DEDC" >
<form action="shruti2.php" method="get">
<th colspan="2"><h1>Registration Form</h1></th>
</tr>
<tr><td>Username:</td><td><input type="text" size="12" name="username"></td></tr>
<tr><td>Passwrod:</td><td><input type="text" size="12" name="password"></td><tr>
<tr><td>First Name:</td><td><input type="text" size="37" name="f_name"></td></tr>
<tr><td>Last Name:</td><td><input type="text" size="37" name="l_name"></td></tr>
<tr><td>Email id:</td><td><input type="text" size="37" name="email_id"></td></tr>
<tr><td>Mobile no:</td><td><input type="text" size="37" name="mobile_no"></td></tr>
<tr><td>Gender:</td><td>
<input type="radio" name="gender" value="Male" checked><span>Male</span>					
<input type="radio" name="gender" value="Female"><span>Female</span></td></tr>
	   
<tr><td>Hobbies:</td>
<td><input type="checkbox" name="hobbies" value="Singing" checked><span>Singing</span>
<input type="checkbox" name="hobbies" value="Dancing"><span>Dancing</span>
<input type="checkbox" name="hobbies" value="Travelling"><span>Travelling</span></td></tr>


<td><style=border-color:maroon   type="text" name="course"></td></tr>
		<tr><td><label>Course:</td><td></label>
		<select name="course" >
		<option>Please select course</option>
		<option value="BCA">BCA</option>
		<option value="BBA">BBA</option>
		<option value="BSCIT">BSCIT</option>
		<option value="BCOM">BCOM</option>
		</select>
		</td></tr>

<tr><td colspan=2><center><input type="submit" name="submit"></td></tr>
</table>
</head>
</form>
</body>
</html>
	