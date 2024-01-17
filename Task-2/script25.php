<!DOCTYPE html>
<html>
<head>
    <title>Number Swapping Without Third Variable</title>
</head>
<body>

<?php
// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user-entered numbers
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    // Validate if the entered values are numeric
    if (is_numeric($number1) && is_numeric($number2)) {
        echo "Before swapping: Number1 = $number1, Number2 = $number2 <br>";

        // Swap numbers without using a third variable
        $number1 = $number1 + $number2;
        $number2 = $number1 - $number2;
        $number1 = $number1 - $number2;

        echo "After swapping: Number1 = $number1, Number2 = $number2";
    } else {
        echo "Please enter valid numeric values for both numbers.";
    }
}
?>

<!-- HTML form to take user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter the first number: <input type="text" name="number1">
    Enter the second number: <input type="text" name="number2">
    <input type="submit" value="Swap Numbers">
</form>

</body>
</html>
