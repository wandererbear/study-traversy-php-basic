<?php
  // $_SESSION['ตั้งชื่อ'] สารมารถส่งข้อมูลข้ามหน้าได่
  // Session คือตัวแปรของserverที่ส่งข้ามหน้าได้
  // แต่ปิด browser หายหมดไม่เหมือน cookie
  // Cookie คิอตัวแปรของ client
  // Check ว่ามีการส่ง form มา
  if(isset($_POST['submit'])) {
    // หน้าไหนใช้ session ต้อง start ก่อน
    session_start();

    // เอาที่ส่งมาเก็บในตัวแปร session
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    // Link ไปหน้านี้
    header('Location: about.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Session</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
