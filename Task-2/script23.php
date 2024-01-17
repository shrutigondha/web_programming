<!DOCTYPE html>
<html>
<head>
    <title>Largest Number Finder</title>
</head>
<body>

<?php
// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user-entered numbers
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];

    // Validate if the entered values are numeric
    if (is_numeric($number1) && is_numeric($number2) && is_numeric($number3)) {
        // Find the largest number
        $largestNumber = max($number1, $number2, $number3);

        echo "The largest number among $number1, $number2, and $number3 is $largestNumber.";
    } else {
        echo "Please enter valid numeric values for all three numbers.";
    }
}
?>

<!-- HTML form to take user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter the first number: <input type="text" name="number1">
    Enter the second number: <input type="text" name="number2">
    Enter the third number: <input type="text" name="number3">
    <input type="submit" value="Find Largest Number">
</form>

</body>
</html>
