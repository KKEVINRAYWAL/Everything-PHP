# **Everything-PHP**

## **Explanation of Variables, conditions and booleans in PHP**

Declaring Variables: In PHP, variables are declared with a dollar sign (`$`) followed by the variable name. Variable names are case-sensitive and can contain letters, numbers, and underscores, but they must start with a letter or underscore.



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

# ** Arrays**

Explanation of Arrays:
Definition: An array is a data structure that can hold multiple values, called elements. Each element in an array is identified by its index.
Analogy: Think of an array as a folder. Just like a folder can contain multiple files, an array can contain multiple values (elements).
Usage: Arrays are useful for storing collections of data, such as a list of book titles, a series of numbers, or any other group of related items.
## Detailed Breakdown of the Code:

Array Declaration: `$books` = [...] is used to declare and initialize the array.
The array $books contains four elements, each of which is a string representing a book title.
Looping through the Array:
The foreach loop is used to iterate over each element in the array.
foreach (`$books` as `$book`) assigns each element of $books to the variable $book one by one.
Inside the loop, each book title is printed inside a `<li>` (list item) tag.

# Output:
The result of the loop is an unordered list (`<ul>`) where each book title is a list item (`<li>`).
Practical Use:

Arrays are fundamental in programming for organizing and managing collections of data. They allow efficient access, manipulation, and iteration over multiple elements, making them indispensable for tasks like:

Storing a list of items (e.g., books, products, users).
Grouping related data.
Iterating through large datasets.
Implementing data structures like stacks, queues, and matrices.
By understanding arrays and their usage, developers can handle data more effectively and write more dynamic, flexible code.


# **Associative Arrays:**

An associative array is a collection of key-value pairs. Unlike indexed arrays, which use numeric indices, associative arrays use named keys to identify values.
This is similar to a folder where each file (value) has a specific label (key) for easy identification.
## Associative Arrays in PHP

```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domo</title>
</head>

<body>
    <h1>Recommended Books</h1>
    
    <?php
    // Creating an associative array of books.
    // Each book is represented as an associative array with keys: 'name', 'author', and 'purchaseUrl'.
    $books = [
        [
            'name' => "Do Androids Dream of Electric Sheep",
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'https://example.com'
        ], 
        [
            'name' => "The Langoliers",
            'author' => 'Stephen King',
            'purchaseUrl' => 'https://example.com'
        ],
        [
            'name' => "Project Hail Mary",
            'author' => 'Andy Weir',
            'purchaseUrl' => 'https://example.com'
        ]
    ];
    ?>

    <!-- PHP code to display each book's information in a list -->
    <ul>
        <?php foreach ($books as $book): ?>
            <!-- Loop through each book in the associative array and display its details -->
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <!-- Display the book's name as a link -->
                    <?= $book['name']; ?>
                </a>
                <!-- Display the book's author -->
                <span>by <?= $book['author']; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
```
