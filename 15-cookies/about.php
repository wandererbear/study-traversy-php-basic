<?php
  // วิธี save array เข้า cookie ต้อง serialize()ก่อน
  $user = [
    'name' => 'teddybear',
    'email' => 'wanderer@gmail.commail.com',
    'age' => 29
  ];

  $serialize_user = serialize($user);
  setcookie('user', $serialize_user, time() + (86400 * 30));
  $user = unserialize($_COOKIE['user']);
  echo $user['name'] . "<br />";
  echo $user['age'] . "<br />";

  if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "$username is set <br />";
  } else {
    echo "cookie is not set <br />";
  }

  if(count($_COOKIE) > 0) {
    echo "ตอนนี้มี " . count($_COOKIE) . "cookies ได้แก่<br/>";
    foreach($_COOKIE as $each_cookie) {
      if ($each_cookie == $_COOKIE['user']) {
        $user = unserialize($_COOKIE['user']);
        foreach($user as $key => $val) {
          echo "$key => $val <br />";
        }
      } else {
        echo "$each_cookie <br />";
      }
    }
  }
?>
