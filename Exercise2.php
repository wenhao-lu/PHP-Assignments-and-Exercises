<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2: Links and If Statements</title>
</head>
<body>
    
    <h1>PHP Exercise 2: Links and If Statements</h1>
    <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>
    
    <?php
    // **************************************************
    // Do not edit this code

    $randomNumber = ceil(rand(1,3));

    echo '<p>The random number is '.$randomNumber.'.</p>';

    if ($randomNumber == 1)
    {
      $linkName = 'Codecademy';
      $linkURL = 'https://www.codecademy.com/';
      $linkImage = '';
      $linkDescription = 'Learn to code interactively, for free.';
    }
    elseif ($randomNumber == 2)
    {
      $linkName = '';
      $linkURL = 'https://www.w3schools.com/';
      $linkImage = 'w3schools.png';
      $linkDescription = 'W3Schools is optimized for learning, testing, and training.';
    }
    else
    {
      $linkName = 'Mozilla Developer Network';
      $linkURL = 'https://developer.mozilla.org';
      $linkImage = 'mozilla.png';
      $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';
    }

    // **************************************************


    //check empty 'linkName', use 'linkURL' name to display empty name
    //click on the 'linkName' will be redirected to their offical website   
    if($linkName!==""){
        echo "<h2><a href='".$linkURL."'>".$linkName."</h2>";
    }
    else{
        echo "<h2><a href='".$linkURL."'>".parse_url($linkURL,PHP_URL_HOST)."</h2>";
    }
    //check empty 'linkImage', use a default 'notfound.png' to display empty image
    if ($linkImage!==""){
      echo "\n<img src='".$linkImage."' width='200px'>";
    }
    else {
      echo "\n<img src='notfound.png' width='200px'>";
    }
    //print out the 'linkDescription'
    echo "<h3>".$linkDescription."</h3>";
  


  // From Wenhao (Kevin) Lu @ Http 5212

    
?>







</body>
</html>