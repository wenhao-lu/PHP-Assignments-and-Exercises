<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
</head>
<body>
    
  <h1>PHP and For Loops</h1> 

  <p>Use PHP echo, if statements, and loops to output all three links.</p>

  <?php

  // **************************************************
  // Do not edit this code
  
  $links = array (
    0 => array (
      'name' => 'Codecademy',
      'url' =>'https://www.codecademy.com/',
      'image' => '',
      'description' => 'Learn to code interactively, for free.' ),
    1 => array ( 
      'name' => '',
      'url' => 'https://www.w3schools.com/',
      'image' => 'w3schools.png',
      'description' => 'W3Schools is optimized for learning, testing, and training.' ),
    2 => array (
      'name' => 'Mozilla Developer Network',
      'url' => 'https://www.codecademy.com/',
      'image' => 'mozilla.png',
      'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
    );
    
  // **************************************************

  for ($i = 0; $i < count ($links); $i ++)
  {
    //check empty 'name', use 'url' name to display empty name
    //click on the 'name' will be redirected to their offical website   
    if($links[$i]['name']!==""){
        echo "<hr>";
        echo '<h1><a href="'.$links[$i]['url'].'">'.$links[$i]['name'].'</h1>';
    }
    else{
        echo "<hr>";
        echo '<h1><a href="'.$links[$i]['url'].'">'.parse_url($links[$i]['url'],PHP_URL_HOST).'</h1>';
    }
    //check empty 'image', use a default 'notfound.png' to display empty image
    if($links[$i]['image']!==""){
        echo "<img src='".$links[$i]['image']."' width='200px'>";
    }
    else{
        echo "<img src='notfound.png' width='200px'>";
    }
    //print out the 'description'
    echo "<h3>".$links[$i]['description']."</h3>";

  }

  //echo '<pre>';
  //print_r ($links);
  //echo '</pre>';

  // From Wenhao (Kevin) Lu @ Http 5212
  ?>
</body>
</html>
