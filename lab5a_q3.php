<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length;
        }

        // Example values for the rectangle's width and length
        $width = 4;
        $length = 2;

        // Call the function and store the result
        $area = calculateArea($width, $length);
    ?>

    <p>
        <?php
            // Display the result
            echo "The area of a rectangle with a width of $width and $length is $area.";
        ?>
    </p>
</body>
</html>
