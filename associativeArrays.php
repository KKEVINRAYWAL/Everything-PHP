<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Domo</title>
</head>

<body>
    <h1>Recommended Books</h1>
    
    <?php
    // Associative arrays in PHP: These are arrays where each key is associated with a specific value.
    // This is similar to a folder where each file (value) has a specific label (key) for easy identification.

    // Creating an associative array of books.
    // Each book is represented as an associative array with keys: 'name', 'author', and 'purchaseUrl'.
    $books = [
        [
            'name' => "Do Androids Dream of Electric Sheep",  // The name of the book
            'author' => 'Philip K. Dick',                    // The author of the book
            'purchaseUrl' => 'https://example.com'           // URL to purchase the book
        ], 
        [
            'name' => "The Langoliers",                      // The name of the book
            'author' => 'Stephen King',                      // The author of the book
            'purchaseUrl' => 'https://example.com'           // URL to purchase the book
        ],
        [
            'name' => "Project Hail Mary",                   // The name of the book
            'author' => 'Andy Weir',                         // The author of the book
            'purchaseUrl' => 'https://example.com'           // URL to purchase the book
        ]
    ];

    // Associative arrays allow for more meaningful data access and manipulation.
    // For example, instead of using an index to access book details, you can use named keys.
    ?>

    <!-- PHP code to display each book's information in a list -->
    <ul>
        <?php 
        // Loop through each book in the associative array and display its details
        foreach ($books as $book): 
        ?>
            <li>
                <!-- The 'purchaseUrl' key holds the URL for purchasing the book -->
                <a href="<?= $book['purchaseUrl'] ?>">
                    <!-- The 'name' key holds the name of the book, displayed as a clickable link -->
                    <?= $book['name']; ?>
                </a>
                <!-- The 'author' key holds the author's name, displayed alongside the book name -->
                <span>by <?= $book['author']; ?></span>
            </li>
        <?php 
        // End the foreach loop
        endforeach; 
        ?>
    </ul>

</body>

</html>



<!-- assignment:  -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        // Associative arrays in PHP: These arrays use named keys that you assign to them.
        // Think of an associative array as a folder containing different labeled files (values).
        // Each book is represented as an associative array with keys for 'name', 'author', 'releaseYear', and 'purchaseUrl'.

        // Creating an associative array of books
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',  // Book title
                'author' => 'Philip K. Dick',                    // Author of the book
                'releaseYear' => 1968,                           // Release year of the book
                'purchaseUrl' => 'http://example.com'            // URL to purchase the book
            ],
            [
                'name' => 'Project Hail Mary',                   // Book title
                'author' => 'Andy Weir',                         // Author of the book
                'releaseYear' => 2021,                           // Release year of the book
                'purchaseUrl' => 'http://example.com'            // URL to purchase the book
            ]
        ];
    ?>

    <!-- Using a foreach loop to iterate through the associative array of books -->
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <!-- Creating a clickable link for each book -->
                <!-- The href attribute uses the 'purchaseUrl' from the associative array -->
                <!-- The link text includes the 'name' and 'releaseYear' from the associative array -->
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
