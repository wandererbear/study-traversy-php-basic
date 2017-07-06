<?php
  // single line comment
  # single line comment
  /*
    multiline
    comment
  */

  #variable
  /*
    -prefix $
    -start with alphabet _
    -case sensitive
  */
  $variable = '$variable: variable';
  echo $variable . "<br />";

  #print
  echo "echo: return nothing and fast <br/>";
  print "print: retrun 1 and slow <br/>";

  #data types
  /*
    String
    Integers
    Floats
    Booleans
    Arrays
    Objects
    Null
    Resource(Function)
  */
  $num_first = 4;
  $num_second = 5;
  $sum = $num_first + $num_second;
  echo $sum."</br>";

  $string1 = "Hello";
  $string2 = "World";
  $statement1 = $string1 .' '. $string2;// Hello world
  $statement2 = '$string1  $string2'; // $string1  $string2
  $statement3 = "$string1  $string2"; // Hello world
  echo $statement1."</br>";
  echo $statement2."</br>";
  echo $statement3."</br>";

  #Constant param ตัวที่3 คือ case insensitive
  define('CONSTANT', 'I am constant', true); // const CONSTANT = 'I am constant';
  echo CONSTANT;
  echo constant;
?>
