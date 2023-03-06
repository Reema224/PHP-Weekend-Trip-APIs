<?php

function isPalindrome($word) {
  
$reversed_word = strrev($word);

  return $word === $reversed_word;
}

if (isset($_GET['string'])) {
  $input_word = $_GET['string'];

  $isPalindrome = isPalindrome($input_word);

  $response = json_encode(array('isPalindrome' => $isPalindrome));
  header('Content-Type: application/json');
  echo $response;
} else {

  $response = json_encode(array('error' => 'Missing input string'));
 
  echo $response;
}
?>
