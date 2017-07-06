<?php
  // from input[name=""]
  // htmlentities() กัน <script> เป็น &lt; ได้
  if(isset($_GET['name'])) {
    $name = htmlentities($_GET['name']);
    $email = htmlentities($_GET['email']);
    echo "$name <br />";
    echo "$email <br />";
    print_r($_GET);
    echo "<br />";
  }

  if(isset($_POST['age'])) {
    $age = htmlentities($_POST['age']);
    $phone = htmlentities($_POST['phone']);
    echo "$age <br />";
    echo "$phone <br />";
    print_r($_POST);
    echo "<br />";
  }

  if(isset($_REQUEST['gender'])) {
    $gender = htmlentities($_REQUEST['gender']);
    echo "$gender <br />";
    print_r($_REQUEST);
    echo "<br />";
  }

  echo $_SERVER['QUERY_STRING']; // ข้างหลัง ?name=this&email=that
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GET POST</title>
</head>
<body>
  <h2>GET</h2>
  <form method="GET" action=<?php echo $_SERVER['PHP_SELF'];?>>
    <div>
      <label for="name">NameGET</label><br>
      <input type="text" name="name" id="name">
    </div>
    <div>
      <label for="email">EmailGET</label><br>
      <input type="text" name="email" id="email">
    </div>
    <input type="submit" value="send">
  </form>

  <h2>POST</h2>
  <form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?>>
    <div>
      <label for="age">AgePOST</label><br>
      <input type="text" name="age" id="age">
    </div>
    <div>
      <label for="phone">PhonePOST</label><br>
      <input type="text" name="phone" id="phone">
    </div>
    <input type="submit" value="send">
  </form>

  <h2>REQUEST</h2>
  <form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?>>
    <div>
      <label for="gender">genderGET/POST/REQUEST</label><br>
      <input type="text" name="gender" id="gender">
    </div>
    <input type="submit" value="send">
  </form>

  <h2>Send Query string</h2>
  <ul>
    <li><a href=<?php echo $_SERVER['PHP_SELF']."?name=Teddy&email=teddy@gmail.com";?>>Teddy</a></li>
    <li><a href=<?php echo $_SERVER['PHP_SELF']."?name=Wanderer&email=wanderer@gmail.com";?>>Wanderer</a></li>
  </ul>
  <?php if(isset($name) && isset($email)): ?>
    <h1><?php echo "$name's Profile"; ?></h1>
    <p><?php echo "$name: has email as $email"; ?></p>
  <?php endif; ?>
</body>
</html>
