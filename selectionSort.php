<?php

function selectionSort($array) {
  $length = count($array);
  for ($i = 0; $i < $length - 1; $i++) {
    $currentIndex = $i;
    for ($j = $i + 1; $j < $length; $j++) {
      if ($array[$j] < $array[$currentIndex]) {
        $currentIndex = $j;
      }
    }
    $temp = $array[$i];
    $array[$i] = $array[$currentIndex];
    $array[$currentIndex] = $temp;
  }
  return $array;
}

if (isset($_GET['numbers'])) {
  $Input_numbers = $_GET['numbers'];
  $numbers = explode(',', $Input_numbers);

  $Numbers_sorted = selectionSort($numbers);
  $response = json_encode($Numbers_sorted);
  echo $response;
} else {

  $response = json_encode(array('error' => 'Fail: Insert numbers in url'));
  echo $response;
}
?>
