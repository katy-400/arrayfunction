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
<html> <h3> array_pop </h3> </html>
<html> <h3> array_push </h3> </html>
<html> <h3> array_combine </h3> </html>
<html> <h3> fgetcsv </h3> </html>
<html> <h3> implode </h3> </html>
<html> <h3> explode </h3> </html>
<html> <h3> array_intersect </h3> </html>
<html> <h3> array_div </h3> </html>
<html> <h3> </h3> </html>
<html> <h3> </h3> </html>
<html> <h3> </h3> </html>
<html> <h3> </h3> </html>