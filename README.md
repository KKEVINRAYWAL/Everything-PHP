# **Everything-PHP**

## **Explanation of Variables, conditions and booleans in PHP**

Declaring Variables: In PHP, variables are declared with a dollar sign ($) followed by the variable name. Variable names are case-sensitive and can contain letters, numbers, and underscores, but they must start with a letter or underscore.



```php
$name = "Dark Matter";
$read = false;
```

Types of Variables: PHP is a loosely typed language, which means you don't have to declare the data type of a variable. PHP will automatically convert the variable to the correct data type based on its value.

Using Variables in Strings: You can insert variables directly into strings using double quotes ("). This is known as variable interpolation.

```php

$message = "You have read $name";
```

Making Code Dynamic with Logic

Conditional Statements: Conditional statements like if, else, and elseif are used to execute different blocks of code based on certain conditions. This allows your code to make decisions and behave differently in different situations.

```php
if ($read) {
    $message = "You have read $name";
} else {
    $message = "You have NOT read $name";
}
```


Example of Dynamic Code: To make your code more dynamic, you could, for instance, change the $read variable based on some input or a condition. Here is an example where we check if the current day is Monday and set $read accordingly:


```php
$name = "Dark Matter";
$currentDay = date("l"); // Get the current day of the week
$read = ($currentDay === "Monday"); // Set $read to true if today is Monday

if ($read) {
    $message = "You have read $name";
} else {
    $message = "You have NOT read $name";
}
```