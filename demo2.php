<?php

$name=$_REQUEST['my_name'];
echo "<br>";
$city=$_REQUEST['my_city'];
echo "<br>";
$address=$_REQUEST['my_address'];

echo "<table bordercolor=blue border=1><tr><td>Name:</td><td>$name</td></tr>
<tr><td>City:</td><td>$city</td></tr>
<tr><td>Address:</td><td>$address</td></tr>
</table>";

?>
