<?php
function swapNumbers($word) {
  $letters = array(); 
  $numbers = array(); 

  for ($i = 0; $i < strlen($word); $i++) {
    if (is_numeric($word[$i])) {
      $numbers[] = $word[$i];
    } else {
      $letters[] = $word[$i];
    }
  }
  $numbers = array_reverse($numbers);

  $result = ''; 
  $j = 0;

  for ($i = 0; $i < strlen($word); $i++) {
    if (is_numeric($word[$i])) {
      $result .= $numbers[$j]; 
      $j++; 
    } else {
      $result .= $letters[$i - $j]; 
    }
  }

  return $result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $word = $_POST['word'];
  $reverseword = swapNumbers($word);
  $response = array(
    'reverse' => $reverseword
  );

  echo json_encode($response);
} else {
  echo 'Error';
}
?>