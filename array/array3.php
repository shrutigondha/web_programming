<?php
$student_master=array(
				array("rollno"=>1,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004"),
				array("rollno"=>2,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004"),
				array("rollno"=>3,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004"),
				array("rollno"=>4,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004"),
				array("rollno"=>5,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004"),
				array("rollno"=>6,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004"),
				array("rollno"=>7,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004"),
				array("rollno"=>8,"name"=>"Shruti","City"=>"Rajkot","University"=>"Atmiya","Age"=>20,"Course"=>"Bca","Divison"=>"B1","Gender"=>"Female","DOB"=>"24 Jan,2004")
			
			);

//print_r($student_master);

echo "<table border=1><tr><td><b>Rollno</b></td>
						  <td><b>Name</b></td>
						  <td><b>City</b></td>
						  <td><b>University</b></td>
                          <td><b>Age</b></td>
						  <td><b>Course</b></td>
						  <td><b>Divison</b></td>
						  <td><b>Gender</b></td>
						  <td><b>DOB</b></td>			
					  </tr>";


foreach($student_master as $row)
{
	echo "<tr>";
	foreach($row as $detail)
	{
		echo "<td>"."$detail"."</td>";
	}
		echo"</tr>";
}
echo "</table>";
?>