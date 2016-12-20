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
    //This is counting the characters and breaking the strings apart.
    $input1 = "sup"; 
    $input2 = "sup,playa";
    $input3 = 'how,you,doing,boi';
    var_dump( explode( ',', $input1 ) );
    var_dump( explode( ',', $input2 ) );
    var_dump( explode( ',', $input3 ) );
    
    echo "<\pre>";
  
  ?>

<html> <h3> array_intersect </h3> </html>

  //This is finding what is in common between the two arrays.
  <?php
    echo "<pre>";
    $array1 = array("a" => "green", "red", "blue", "yellow");
    $array2 = array("b" => "green", "yellow", "red");
    $result = array_intersect($array1, $array2);
    print_r($result);
    echo "<\pre>";
  ?>

<html> <h3> fgetcsv </h3> </html>

  <?php
  $row = 1;
  if (($handle = fopen("Names.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);
          echo "<p> $num fields in line $row: <br /></p>\n";
          $row++;
          for ($c=0; $c < $num; $c++) {
              echo $data[$c] . "<br />\n";
          }
      }
      fclose($handle);
  }
  ?>

<html> <h3> array_div </h3> </html>

  <?php
  
  $array1 = array("a" => "green", "red", "blue", "red");
  $array2 = array("b" => "green", "yellow", "red");
  $result = array_diff($array1, $array2);
  
  print_r($result);

  ?>

<html> <h3> in_array </h3> </html>

  <?php
    $os = array("Mac", "NT", "Irix", "Linux");
    if (in_array("Irix", $os)) {
        echo "Got Irix";
    }
    if (in_array("mac", $os)) {
        echo "Got mac";
    }
  ?>

<html> <h3> usort </h3> </html>

  <?php
    function cmp($a, $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    $a = array(3, 2, 5, 6, 1);
    usort($a, "cmp");
    foreach ($a as $key => $value) {
        echo "$key: $value\n";
    }

  ?>

<html> <h3> range </h3> </html>

  <?php
    // array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
    foreach (range(0, 12) as $number) {
        echo $number;
    }
  ?>

<html> <h3> sort </h3> </html>

  <?php
    
    $fruits = array("lemon", "orange", "banana", "apple");
    sort($fruits);
    foreach ($fruits as $key => $val) {
        echo "fruits[" . $key . "] = " . $val . "\n";
    }

  ?>
