<?php
  #Function
  ##############################
  /*
    01-camelCase(){} //php + js
    02-lower_case(){}
    03-PascalCase(){} // for ClassName
  */
  # Basic Value
  function theFunction($param = 'world') {
    echo "Hello, $param <br />";
  }
  theFunction();
  theFunction('Teddy');

  # Return value
  function  addNum($num1 = 0, $num2 = 0) {
    return $num1 + $num2;
  }

  echo addNum(3) . "<br />";
  echo addNum(3,4) . "<br />";

  # By Reference(คล้าย clousure js)
  $outside = 10;
  echo "This from outside before function: $outside <br />";
  function addFive($num) {
    $num += 5;
    echo "This from inside function: $num <br />";
  }

  addFive($outside);
  echo "This from outside after function: $outside <br />";

  function addFiveStore(&$num) {
    $num += 5;
    echo "This from inside By Reference function: $num <br />";
  }

  addFiveStore($outside);
  echo "This from outside after By Reference function: $outside <br />";
