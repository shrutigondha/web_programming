<html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

<?php
// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user-entered number
    $userNumber = $_POST["number"];

    // Validate if the entered value is a non-negative integer
    if (is_numeric($userNumber) && $userNumber >= 0 && floor($userNumber) == $userNumber) {
        // Calculate the factorial
        $factorial = 1;
        for ($i = 1; $i <= $userNumber; $i++) {
            $factorial *= $i;
        }

        echo "The factorial of $userNumber is $factorial.";
    } else {
        echo "Please enter a valid non-negative integer.";
    }
}
?>

<!-- HTML form to take user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="Calculate Factorial">
</form>

</body>
</html>
