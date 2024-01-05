<?php

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$country=$_REQUEST['country'];
$zip_code=$_REQUEST['zip_code'];
$sex=$_REQUEST['sex'];
$language=$_REQUEST['language'];
$about=$_REQUEST['about'];


echo "<table bordercolor=blue border=1>
<tr><td>Username:</td><td>$username</td></tr>
<tr><td>Password:</td><td>$password</td></tr>
<tr><td>Name:</td><td>$name</td></tr>
<tr><td>Address:</td><td>$address</td></tr>
<tr><td>Country:</td><td>$country</td></tr>
<tr><td>Zip_code:</td><td>$zip_code</td></tr>
<tr><td>Sex:</td><td>$sex</td></tr>
<tr><td>Language:</td><td>$language</td></tr>
<tr><td>About:</td><td>$about</td></tr>
</table>";




?>
