<?php
  session_start();
  $name = isset($_SESSION['name'])? $_SESSION['name']: "Undefined" ;
  $email = isset($_SESSION['email'])? $_SESSION['email']: "Undefined" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>About Page</h1>
  <p>Name: <?php echo $name; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <?php if(isset($_SESSION['name']) && isset($_SESSION['email'])): ?>
    <ul>
      <?php foreach($_SESSION as $key => $val): ?>
        <li><?php echo "$key: $val"; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <a href="./unset-session.php">Clear Session</a>
</body>
</html>
