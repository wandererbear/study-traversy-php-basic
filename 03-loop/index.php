<?php
  #1/4 For Loop
  ###############################
  # @params - init, condition , increment
  for ($i=0; $i < 10; $i++) {
    echo "$i";
  }
  echo "<br />";

  #2/4 While Loop
  ###############################
  # @params - condition
  $i = 0;
  while ($i <= 10) {
    echo "$i";
    $i++;
  }
  echo "<br />";

  #3/4 Do..While Loop
  ###############################
  # @params - condition
  $i = 0;
  do{
    echo "$i";
    $i++;
  }while ($i <= 10);
  echo "<br />";

  #4/4 For Each(array)
  ###############################
  # @params - init, condition , increment
  $cars = ['Toyota', 'Honda', 'BMW'];
  foreach($cars as $car) {
    $total_car = count($cars);
    $last_car = --$total_car;

    if($car != $cars[$last_car]) {
      echo "$car, ";
    } else {
      echo "$car";
    }

  }
  echo "<br />";
  echo "<br />";

  # Assosiative Array
  $cars = [
    'Toyota'=>'Yaris', 
    'Honda'=>'Jazz', 
    'BMW'=>'Series3'
  ];
  foreach($cars as $car => $model) {
      echo "$car has $model <br /> ";
  }
