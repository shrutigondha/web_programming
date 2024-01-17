<!DOCTYPE html>
<html>
<head>
    <title>Circle Area Calculator</title>
</head>
<body>

<?php
// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user-entered radius
    $radius = $_POST["radius"];

    // Validate if the entered value is a positive number
    if (is_numeric($radius) && $radius > 0) {
        // Calculate the area of the circle
        $area = M_PI * pow($radius, 2);

        echo "The area of a circle with radius $radius is $area square units.";
    } else {
        echo "Please enter a valid positive number for the radius.";
    }
}
?>

<!-- HTML form to take user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter the radius of the circle: <input type="text" name="radius">
    <input type="submit" value="Calculate Area">
</form>

</body>
</html>
