<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domo</title>
</head>

<body>
    <h1> Recommended Books</h1>
    
    <?php
    // An array in programming is similar to a folder that holds multiple files.
    // In this context, the array $books is like a folder that contains a list of book titles.
    // Each element in the array is a separate book title, just like each file in a folder is a separate document.

    // Declaring an array called $books, which contains a list of book titles.
    $books = [
        "Do Androids Dream of Electric Sheep",  // First book title
        "The Langoliers",                       // Second book title
        "Hail Mary",                            // Third book title
        "Animal Farm"                           // Fourth book title
    ];
    ?>
    
    <ul>
        <?php 
        // Using a foreach loop to iterate through each element in the $books array.
        // The foreach loop will run once for each book title in the array.
        foreach ($books as $book): 
        ?>
            <!-- Each book title is displayed as a list item in the unordered list. -->
            <li><?php echo $book; ?></li>
        <?php endforeach; // Ending the foreach loop. ?>
    </ul>

</body>

</html>
