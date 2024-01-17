<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>

<?php
// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user-entered string
    $userString = $_POST["input_string"];

    // Remove spaces and convert to lowercase for a case-insensitive check
    $cleanedString = strtolower(str_replace(' ', '', $userString));

    // Check if the cleaned string is a palindrome
    $isPalindrome = ($cleanedString == strrev($cleanedString));

    if ($isPalindrome) {
        echo "'$userString' is a palindrome.";
    } else {
        echo "'$userString' is not a palindrome.";
    }
}
?>

<!-- HTML form to take user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a string: <input type="text" name="input_string">
    <input type="submit" value="Check Palindrome">
</form>

</body>
</html>
