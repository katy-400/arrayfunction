<html> <h1> Array Functions </h1> </html>

<html> <h3> array_keys </h3> </html>

<?php
  $array = array(0 => 100, "color" => "red");
  print_r(array_keys($array));
  
  $array = array("blue", "red", "green", "blue", "blue");
  print_r(array_keys($array, "blue"));
  
  $array = array("color" => array("blue", "red", "green"),
                 "size"  => array("small", "medium", "large"));
  print_r(array_keys($array));
?>

<html> <h3> array_search </h3> </html>

<?php
  $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
  
  $key = array_search('green', $array); // $key = 2;
  echo $key;
  $key = array_search('red', $array);   // $key = 1;
  echo $key;
?>

<html> <h3> array_walk </h3> </html>

<?php
  $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
  
  function test_alter(&$item1, $key, $prefix)
  {
      $item1 = "$prefix: $item1";
  }
  
  function test_print($item2, $key)
  {
      echo "$key. $item2<br />\n";
  }
  
  echo "Before ...:\n";
  array_walk($fruits, 'test_print');
  
  array_walk($fruits, 'test_alter', 'fruit');
  echo "... and after:\n";
  
  array_walk($fruits, 'test_print');
?>

<html> <h3> array_pop </h3> </html>

<?php
  $stack = array("orange", "banana", "apple", "raspberry");
  $fruit = array_pop($stack);
  print_r($stack);
?>

<html> <h3> array_push </h3> </html>

<?php
  $stack = array("orange", "banana");
  array_push($stack, "apple", "raspberry");
  print_r($stack);
?>

<html> <h3> array_combine </h3> </html>
  <?php
    $a = array('green', 'red', 'yellow');
    $b = array('avocado', 'apple', 'banana');
    $c = array_combine($a, $b);
    
    print_r($c);
  ?>

<html> <h3> fgetcsv </h3> </html>


<html> <h3> implode </h3> </html>

  <?php
  
    $array = array('Nyby', 'kn69@poop.com', '101-505-8008');
    $comma_separated = implode(", ", $array);
    
    echo $comma_separated; // lastname,email,phone
    
    echo "<br>" ;
       
    // Empty string when using an empty array:
    var_dump(implode('hello', array(hello))); // string(0) ""
  
  ?>

<html> <h3> explode </h3> </html>

  <?php
  echo "<pre>";
  /* 
     A string that doesn't contain the delimiter will simply
     return a one-length array of the original string.
  */
  $input1 = "sup"; 
  $input2 = "sup,playa";
  $input3 = 'how,you,doing,boi';
  var_dump( explode( ',', $input1 ) );
  var_dump( explode( ',', $input2 ) );
  var_dump( explode( ',', $input3 ) );
  
  echo "<\pre>";
  
  ?>

<html> <h3> array_intersect </h3> </html>
<html> <h3> array_div </h3> </html>
<html> <h3> </h3> </html>
<html> <h3> </h3> </html>
<html> <h3> </h3> </html>
<html> <h3> </h3> </html>