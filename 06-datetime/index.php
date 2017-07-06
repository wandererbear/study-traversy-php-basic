<?php
 #All Format: http://php.net/manual/en/function.date.php
  // echo date('d'); // Date 01-31

  // echo date('m'); // Month 01-12
  // echo date('M'); // Month Jan-Dec

  // echo date('Y'); // Year 2017
  // echo date('y'); // Year 17

  // echo date('l'); // Day Monday - Sunday

  echo "Today is " . date('l, d/ m/ y') . "<br />";
  echo "Without Timezone is " . date('h:i:sa') . "<br />";

  // กำหนดเป็นไทยก่อน H=17 h=5
  date_default_timezone_set('Asia/Bangkok');
  echo "Thailand is " . date('H:i:sa') . "<br />";

  // $timestamp = mktime(ชั่วโมง, นาที, วินาที, เดือน,วัน,ปี);
  $timestamp = mktime(16,15,59, 4,2,1988);
  echo "Birthday in timestamp is $timestamp <br />";
  echo date('l d/m/Y h:i:sa',$timestamp) . "<br />";

  // strtotime() : http://php.net/manual/en/function.strtotime.php
  echo date('d/m/y', strtotime("now")) . "<br />";
  echo date('d/m/y', strtotime("10 September 2000")) . "<br />";
  echo date('d/m/y', strtotime("+1 day")) . "<br />";
  echo date('d/m/y', strtotime("+1 week")) . "<br />";
  echo date('d/m/y', strtotime("+2 weeks")) . "<br />";
  echo date('d/m/y', strtotime("+1 week 2 days 4 hours 2 seconds")) . "<br />";
  echo date('d/m/y', strtotime("next Thursday")) . "<br />";
  echo date('d/m/y', strtotime("last Monday")) . "<br />";
