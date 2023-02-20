<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise 1: Links and Variables</title>
</head>
<body>
    <h1>PHP Exercise 1: Links and Variables</h1>

    <p>Use PHP echo and variables to output the following link information:</p>

    <hr>

    <?php
        $linkName = 'Codecademy';
        $linkURL = 'https://www.codecademy.com/';
        $linkImage ='https://upload.wikimedia.org/wikipedia/commons/6/6c/Codecademy.svg';
        $linkDescription = 'Learn to code interactively, for free.';

        echo "<h1>".$linkName."</h1>";
        echo "\n<p>".$linkDescription."</p>";
        echo "\n<img src=".$linkImage.">";
        echo "<br>";
        echo "<a href=''>".$linkName."</a>";


    // From Wenhao (Kevin) Lu @ Http 5212
    ?>
</body>  
</html>