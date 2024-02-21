<html>
<style>
.tab
{
	background-color:black;
	color:white;
}
#dt1{
	color:red;
	font-family:dotum;
}
</style>
</html>

<?php

$d = date("d/m/Y");
echo "<table  class=tab><tr>

<td><b>Date</b></td>
<td><b>Month</b></td>
<td><b>Year</b></td>
</tr>
<tr align=center>
<td id=dt1 colspan=3>$d</td>
</tr>";

date_default_timezone_set("Asia/Calcutta");
$a = date("H:i:s");
echo "<tr>

<td><b>Hour</b></td>
<td><b>Minute</b></td>
<td><b>Second</b></td>
</tr>
<tr align=center>
<td id=dt1 colspan=3>$a</td>
</tr>
</table>";
header("Refresh: 1");

?>