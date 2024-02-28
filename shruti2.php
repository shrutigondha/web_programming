<?php

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$fname=$_REQUEST['f_name'];
$lname=$_REQUEST['l_name'];
$email_id=$_REQUEST['email_id'];
$mobile_no=$_REQUEST['mobile_no'];
$gender=$_REQUEST['gender'];
$hobbies=$_REQUEST['hobbies'];
$course=$_REQUEST['course'];


/*echo "<table bordercolor=blue border=1>
<tr><td>Username:</td><td>$username</td></tr>
<tr><td>Password:</td><td>$password</td></tr>
<tr><td>First_Name:</td><td>$f_name</td></tr>
<tr><td>Last_Name:</td><td>$l_name</td></tr>
<tr><td>Email_id:</td><td>$email_id</td></tr>
<tr><td>Mobile_no:</td><td>$mobile_no</td></tr>
<tr><td>Gender:</td><td>$gender</td></tr>
<tr><td>Hobbies:</td><td>$hobbies</td></tr>
<tr><td>Course:</td><td>$course</td></tr>
</table>";*/

$connect=mysqli_connect("localhost","root","","b1");
//print_r($connect);
echo $query="INSERT INTO `student_detail`(`username`, `fname`, `lname`, `email_id`, `mobile_no`, `gender`, `hobbies`, `course`, `password`) VALUES ('$username','$password','$fname','$lname','$email_id','$mobile_no','$gender','$hobbies','$course')";

$execute_query=mysqli_query($connect,$query);

if($execute_query>=1)
{
	echo "data inserted" ;
}
else
{
	echo "not inserted" ;
}

?>
