<?php
  # condition
  /*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
  */

  $num  = '5';

  if($num == 5) {
    echo "\$num is $num <br />";
  }

  if($num === 5) {
    echo "\$num is $num <br />";
  } elseif($num == 5)  {
    echo "\$num is string of $num <br />";
  } else {
    echo "\$num is not 5 <br />";
  }

  # Logical operators
  $score = 75;
  if($score >= 70 && $score < 80) {
    echo "Score: $score, Grade B <br />";
  }

  $boy = 'male';
  $girl = 'female';
  $tom = 'tom';

  function checkGender($gender) {
    // If one of these true do this
    if($gender === 'male' XOR $gender === 'female') {
      echo "Your are male or female <br />";
    } else {
      echo "You are hibrid or other <br />";
    }
  }

  checkGender($boy);
  checkGender($girl);
  checkGender($tom);

  # switch
  $job = 'knight';
  switch($job) {
    case 'wizzard':
      echo 'your lv > 50 <br />';
    case 'mage':
      echo 'you got wand <br />';
    case 'novice':
      echo 'you got $100 <br />';
      break;

    case 'knight':
      echo 'your lv > 50 <br />';
    case 'swordman':
      echo 'you got sword <br />';
    case 'novice':
      echo 'you got $100 <br />';
      break;
    default:
      echo 'you have to play this game';
      break;
  }
