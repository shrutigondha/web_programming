<!DOCTYPE html>
<html>
<head>
    <title>Square Root Calculator</title>
</head>
<body>

<?php
// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user-entered number
    $inputNumber = $_POST["input_number"];

    // Validate if the entered value is a non-negative number
    if (is_numeric($inputNumber) && $inputNumber >= 0) {
        // Calculate the square root
        $squareRoot = sqrt($inputNumber);

        echo "The square root of $inputNumber is $squareRoot.";
    } else {
        echo "Please enter a valid non-negative number.";
    }
}
?>

<!-- HTML form to take user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a number: <input type="text" name="input_number">
    <input type="submit" value="Calculate Square Root">
</form>

</body>
</html>
