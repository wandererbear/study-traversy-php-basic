<?php
  # 1. Indexed Array
  $arr_old = array('a', 'b', 'c');
  $arr_str = ['zero', 'first', 'second'];
  $arr_num = [0, 1, 2];

  #Adding Item(push in js)
  $arr_str[3] = 'third'; // Assign position
  $arr_str[] = 'forth'; // Latest

  echo "$arr_old[0] <br />";
  echo "$arr_str[3] <br />";
  echo "$arr_str[4] <br />";
  echo "$arr_num[2] <br />";

  echo "<h1>Funtion in Array</h1>";
  echo count($arr_str) . "<br />"; // arr.length() in js
  var_dump($arr_old); echo "<br />"; // array info + type + no. of chars
  print_r($arr_old); echo "<br />"; //array info

  ###############################################
  # 2. Associative arrays
  $arr_asso = array(
    'teddy' => 29,
    'minnie' => 29
  );

  $arr_asso['pooklook'] = 7; // Adding Associative arr
  echo $arr_asso['pooklook'] . "<br />"; // ต้องเรียกผ่าน key เท่านั้น ถ้า $arr_asso[0] จะ error
  var_dump($arr_asso); echo "<br />";

  ###############################################
  # 3. Multi Dimensional Array
  $tutors = [
    ['wanderer', 'bear', 29],
    ['minnie', 'mine', 29],
  ];

  echo $tutors[0][1];
