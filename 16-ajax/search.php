<?php
  $animals[] = "Ant";
  $animals[] = "Bird";
  $animals[] = "Bat";
  $animals[] = "Cat";
  $animals[] = "Dog";
  $animals[] = "Elephant";
  $animals[] = "Frog";
  $animals[] = "Gerraf";
  $animals[] = "Horse";
  $animals[] = "Iguana";
  $animals[] = "Jelly Fish";
  $animals[] = "Kingkong";
  $animals[] = "Monkey";
  $animals[] = "Nuatilus";
  $animals[] = "Owl";
  $animals[] = "Peacock";
  $animals[] = "Qail";
  $animals[] = "Rabbit";
  $animals[] = "Snake";
  $animals[] = "Turtle";
  $animals[] = "Urek";
  $animals[] = "Vulture";
  $animals[] = "Wolf";
  $animals[] = "Xmen";
  $animals[] = "Yell";
  $animals[] = "Zebra";

  //Get query string ที่ส่งมาจาก abc.com?q=string
  // เราไม่ใช้ $_POST[] เพราะเผื่อส่งแบบพิมพ์ url มา
  $q = $_REQUEST['q'];
  $result = "";

  //Get Result
  if(!empty($q)) {
    $q = strtolower($q);
    $length = strlen($q);

    foreach($animals as $animal) {
      // stristr('bi', 'bi(จาก bird)') => true
      if(stristr($q, substr($animal, 0, $length))){
        // ถ้าไม่เจอตัวนำหน้าซ้ำ
        if($result === ""){
          $result = $animal;
        } else {
          // ถ้าเจอชื่อนำหน้าซ้ำให้ใส่ , คั่น
          $result .= ", $animal";
        }
      }
    }
  }
  // ส่งกลับไป
  echo ($result === "")? "No Result" : $result;
