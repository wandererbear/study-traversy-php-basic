<?php
  include_once('../function/function.php');
  $server_msg = "";
  $server_msg_class ="";
  // Check for Submit
  if ( filter_has_var(INPUT_POST, 'submit') ) {
    // Set data to var
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Check for empty value(required)
    if(!empty($name) && !empty($email) && !empty($message)) {
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $server_msg = "email ไม่ถูกต้อง";
        $server_msg_class ="alert-danger";
      } else {
        $toEmail = 'jaturong.poon@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$server_msg = 'Your email has been sent';
					$server_msg_class = 'alert-success';
				} else {
					// Failed
					$server_msg = 'Your email was not sent';
					$server_msg_class = 'alert-danger';
				}
      }
    } else {
      $server_msg = "กรุณาใส่ให้ครบ";
      $server_msg_class ="alert-danger";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact us</title>
  <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">My Web</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <?php if($server_msg != ""): ?>
      <div class="alert <?php echo $server_msg_class; ?>">
        <?php echo $server_msg; ?>
      </div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo isset($name)? $name : null; ?>">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo isset($email)? $email : null; ?>">
      </div>
      <div class="form-group">
        <label for="">Name</label>
        <!-- text area ถ้าเว้นบรรทัดมันจะมีช่องว่างใน database ระวังพิมพ์บรรทัดเดียว -->
        <textarea name="message" class="form-control"><?php echo isset($message)? $message : null; ?></textarea>
      </div>
      <button type="submit" name="submit" class="btm btm-primary">Submit</button>
    </form>
  </div>
</body>
</html>
