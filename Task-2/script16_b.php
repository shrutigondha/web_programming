<?php
$str=$_REQUEST['sentence'];
$str=strtolower($str);
$count=0;
$len=strlen($str);
for($i=0;$i<$len;$i++)
{
	if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
	{
		$count=$count+1;
	}
}
echo "<br>"."total variables are=".$count;
?>