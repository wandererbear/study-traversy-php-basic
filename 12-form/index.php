<?php
include_once('../function/function.php');
// ตรวจข้อมูลว่าส่งมาหน้านี้
// ตรวจว่าเป็น email ดีกว่า regex
/*
if(filter_has_var(INPUT_POST, 'email')){
  if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
    $email = $_POST['email'];
    echo 'Email is valid';
  } else {
    echo 'Email is not valid';
  }
}
*/

if(filter_has_var(INPUT_POST, 'email')){
  $email = $_POST['email'];

  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  echo $email; //a///@email////.com => a@email.com

  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo ': Email is valid <br />';
  } else {
    echo ': Email is not valid <br />';
  }
}

#Check
// filter_var($param, FILTER_VALIDATE_BOOLEAN) => true/false
// filter_var($param, FILTER_VALIDATE_EMAIL) => true/false
// filter_var($param, FILTER_VALIDATE_FLOAT) => true/false
// filter_var($param, FILTER_VALIDATE_INT) => true/false
// filter_var($param, FILTER_VALIDATE_IP) => true/false
// filter_var($param, FILTER_VALIDATE_REGEXP) => true/false
// filter_var($param, FILTER_VALIDATE_URL) => true/false

#Edit
// filter_var($param, FILTER_SANITIZE_EMAIL) => edit version
// filter_var($param, FILTER_SANITIZE_NUMBER_FLOAT) => edit version
// filter_var($param, FILTER_SANITIZE_NUMBER_INT) => edit version
// filter_var($param, FILTER_SANITIZE_STRING) => edit version
// filter_var($param, FILTER_SANITIZE_SPECIAL_CHARS) => edit version
// filter_var($param, FILTER_SANITIZE_URL) => edit version

  $var = '23';
  echo filter_var($var, FILTER_VALIDATE_INT)? "$var is number<br />" : "$num is not number<br />";

  $var2 = 'z23a';
  echoLineBreak(filter_var($var2, FILTER_SANITIZE_NUMBER_INT));

  $script = '<script>alert(1)</script>';
  echoLineBreak(filter_var($script, FILTER_SANITIZE_SPECIAL_CHARS));

  #ตรวจ input ที่ส่งมา filter_input_array(INPUT_POST, $filters); => array of data
  $filters = array(
    "email" => FILTER_VALIDATE_EMAIL,
    "number" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 100
      )
    )
  );
  print_r(filter_input_array(INPUT_POST, $filters));
  echoLineBreak();

  #ตรวจ var array filter_var_array($arr, $filters)
  $arr = [
    "name" => "wanderer bear",
    "age" => 29,
    "birthyear" => 2531
  ];

  $filters = [
    "name" => [
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords" // ชื่อ function
    ],
    "age" => [
      "filter" => FILTER_VALIDATE_INT,
      "min_range" => 1,
      "max_range" => 100
    ],
    "birthyear" => [
      "filter" => FILTER_CALLBACK,
      "options" => "budhaToChrist" // ชื่อ function
    ]
  ];

  function budhaToChrist($year){
    return $year - 543;
  }

  print_r(filter_var_array($arr, $filters));
  echoLineBreak();

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="email" placeholder="Email">
  <input type="text" name="number" placeholder="Number: 1-100">
  <button type="submit">Submit</button>
</form>
