<?php
  include_once('../function/function.php');
  # http://php.net/manual/en/function.print-r.php

  #substr('abc',1) => bc
  $str = 'Hello ';

  echoLineBreak( substr($str, 1) ); // ello str นับจาก [0] มาเริ่มที่ตำแหน่ง [1]
  echoLineBreak( substr($str, 1, 3) ); // ell เริ่ม[1] เอา 3ตัว
  echoLineBreak( substr($str, -2) ); // lo เริ่ม[-1] จบ [-2]

  #strlen() == js.length()
  echoLineBreak( strlen($str) ); // 5

  #strpos หาตำแหน่งแรกที่เจอตัวอักษรเริ่มจาก 0
  echoLineBreak( strpos($str, 'l') ); // 2
  echoLineBreak( strrpos($str, 'l') ); // 3

  function beginWithEndWith($str, $begin, $end, $inverse = false) {
    $beginPosition = strpos($str, $begin);
    if ($inverse === false) {
      $endPosition = strpos($str, $end);
    } elseif ($inverse === true) {
      $endPosition = strrpos($str, $end);
    } else {
      return ;
    }

    $amountOfChar = ($endPosition - $beginPosition) + 1;
    return substr($str,$beginPosition,$amountOfChar);
  }
  echoLineBreak( beginWithEndWith($str, 'h', 'l') ); // hel
  echoLineBreak( beginWithEndWith($str, 'h', 'l', true) ); // hell

  $str_2 = 'Hello             ';
  #trim: ลบช่องว่าง
  var_dump($str_2); // 18
  echoLineBreak();
  var_dump(trim($str_2)); // 5
  echoLineBreak();

  #strtoupper() strtolower() ucwords()
  echoLineBreak(strtoupper($str)); // HELLO
  echoLineBreak(strtolower($str)); // hello
  echoLineBreak(ucwords($str)); // Hello

  # str_replace("old", "new", "str")
  $str_3 = "Hello world";
  echoLineBreak(str_replace("world", "Teddy", $str_3)); // Hello Teddy

  # is_string() => 1 หรือ false
  $str_num = '2';
  $num = 2;
  echoLineBreak(is_string($str_num)); // 1
  var_dump(is_string($num)); //

  # gzcompress() ใช้ย่อข้อมูล
  $str_long = "
    Here is another version that parses
    the print_r() output. I tried the one posted,
    but I had difficulties with it. I believe it has
    a problem with nested arrays. This handles nested
    arrays without issue as far as I can tell.";

  $compressed = gzcompress($str_long);
  $uncompressed = gzuncompress($compressed);
  echoLineBreak($compressed);
  echoLineBreak($uncompressed);
