<?php
  $coffee = true;
  $milk = true;
  $stream = false;
  $water = false;
  $menu = ['espresso', 'americano', 'latte', 'capuchino'];
  $temp = ['hot','normal','cold','frappe'];


  echo ($coffee) ? 'This Coffee ' : 'please order';
  if($coffee) {
    echo "is " . ($milk?($stream? 'capuchino':'latte'):($water? 'americano':'esspresso'));
  }
?>

<!-- old style -->
<div>
  <?php if($coffee) {?>
    <h1>Welcome to our shop</h1>
  <?php } ?>
</div>

<!-- New Style จะได้รู้ว่าเปิดปิดอะไรกันแน่-->
<div>
  <?php if($coffee): ?>
    <h2>wait for 5 mins</h2>
  <?php endif; ?>
</div>

<h3>Our menu</h3>
<ul>
  <?php foreach($menu as $coffee): ?>
    <li><?php echo $coffee ?></li>
  <?php endforeach; ?>
</ul>

<h3>Temp?</h3>
<ul>
  <?php for($i = 0; $i < count($temp); $i++): ?>
    <li><?php echo $temp[$i] ?></li>
  <?php endfor; ?>
</ul>
