<?php
  // Cookie คิอตัวแปรของ client
  // chrome console > Application > Storage[Cookies]
  // chrome setting>advance>content setting>cookies
  if(isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);
    // สร้าง Cookie setcokkie('ชื่อ', 'value', time()+วินาที)
    // ลบ cookie setcokkie('ชื่อ', 'value', time()-3600) เวลาผ่านไปแล้ว
    setcookie('username', $username, time()+3600); //1hrs(3600secs)
    header('Location: about.php');

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Cookies</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Userame">
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
