<head>
    <meta charset="UTF-8">
    <title>Domo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <!-- PHP code block starts here -->
    <?php
    // PHP block to declare and initialize variables
    $name = "Dark Matter"; // Variable $name is assigned the value "Dark Matter"
    $read = false; // Variable $read is assigned the boolean value false

    // Conditional logic to construct the message based on the value of $read
    if ($read) {
        $message = "You have read $name"; // If $read is true, $message is set to "You have read Dark Matter"
    } else {
        $message = "You have NOT read $name"; // If $read is false, $message is set to "You have NOT read Dark Matter"
    }
    ?>
    <!-- Display the message constructed in PHP -->
    <h1>
        "<?php echo $message; ?>."
    </h1>
    
</body>
</html>

<!-- Explanation of Variables in PHP -->

<!-- Declaring Variables: In PHP, variables are declared with a dollar sign ($) followed by the variable name. Variable names are case-sensitive and can contain letters, numbers, and underscores, but they must start with a letter or underscore. -->
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $name = "Dark Matter"; // Variable declaration
    $currentDay = date("l"); // Get the current day of the week, e.g., "Monday"
    $read = ($currentDay === "Monday"); // Dynamic logic: set $read to true if today is Monday

    // Conditional logic to construct the message based on the value of $read
    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }
    ?>
    <!-- Display the message constructed in PHP -->
    <h1>
        "<?php echo $message; ?>."
    </h1>
</body>
</html>
